<?php
//include env.php
require 'env.php';
require 'vendor/autoload.php';

// MongoDB setup
// $client = new MongoDB\Client("mongodb://localhost:27017");
// $database = $client->your_database_name; // Replace with your actual database name
// $collection = $database->repositories; // Replace with your actual collection name

// $username = 'github_username'; // Replace with the GitHub username
// $token = 'your_github_access_token'; // Replace with your GitHub Personal Access Token

$client = new MongoDB\Client($MG_CONNECTION_STRING);
$database = $client->$MG_DB_NAME;
$collection = $database->$MG_COLLECTION_NAME;
$username = $GH_USERNAME;
$token = $GH_PAT;


function checkFilePresence($username, $repoName, $token) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Authorization: token ' . $token,
        'User-Agent: PHP Script',
        'Accept: application/vnd.github.v3+json'
    ]);

    $files = ['.personal', '.mycrolinks'];
    $tags = [];

    foreach ($files as $file) {
        curl_setopt($curl, CURLOPT_URL, "https://api.github.com/repos/$username/$repoName/contents/$file");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_NOBODY, true); // We're only interested in the response code

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($httpCode == 200) {
            $tags[] = $file == '.personal' ? 'personal' : 'mycrolinks';
        }
    }

    if (count($tags) == 2) {
        return 'common';
    } elseif (count($tags) == 1) {
        return $tags[0];
    } else {
        return 'private';
    }
}

function getTags($username, $repo, $token) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.github.com/repos/$username/$repo/contents/.tags",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: token $token",
            "User-Agent: GitHub-Repo-Tag-Fetcher"
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($response, true);
    if (!isset($data['content'])) {
        // Handle the error appropriately. Here, we're returning an empty array.
        return [];
    }
    $content = base64_decode($data['content']);
    return explode("\n", $content);
}

function fetchRepositories($username, $token) {
    global $collection;

    // Check if data is older than 7 days
    $lastUpdate = $collection->findOne([], ['sort' => ['updated_at' => -1], 'projection' => ['updated_at' => 1]]);
    if ($lastUpdate && strtotime($lastUpdate['updated_at']) > strtotime('-7 days')) {
        $storedData = $collection->find([], ['projection' => ['_id' => 0, 'data' => 1]])->toArray()[0]['data'];
        
        // Convert MongoDB\Model\BSONArray to array before using array_map
        $storedDataArray = iterator_to_array($storedData); // Fix applied here
        
        $filteredData = array_map(function($repo) {
            return [
                'name' => $repo['name'],
                'html_url' => $repo['html_url'],
                'description' => $repo['description'],
                'created_at' => $repo['created_at'],
                'updated_at' => $repo['updated_at'],
                'visibility' => $repo['visibility'], 
                'file_presence' => $repo['file_presence'],
                'category' => $repo['category'],
                'tags' => $repo['tags']
            ];
        }, $storedDataArray); // Use the converted array
        return $filteredData; // Return filtered data
    }

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Authorization: token ' . $token,
        'User-Agent: PHP Script',
        'Accept: application/vnd.github.v3+json'
    ]);

    $page = 1;
    $allRepos = [];

    do {
        curl_setopt($curl, CURLOPT_URL, "https://api.github.com/user/repos?type=all&page=$page&per_page=100");
        $response = curl_exec($curl);
        $repos = json_decode($response, true);

        if (!empty($repos)) {
            foreach ($repos as &$repo) {
                $filePresence = checkFilePresence($username, $repo['name'], $token);
                $tags = getTags($username, $repo['name'], $token);
                $category = $tags[0] ?? '';
                $tags = array_slice($tags, 1);
                if (empty($tags)) {
                    $tags = [];
                }
                $repo = [
                    'name' => $repo['name'],
                    'html_url' => $repo['html_url'],
                    'description' => $repo['description'],
                    'created_at' => $repo['created_at'],
                    'updated_at' => $repo['updated_at'],
                    'visibility' => $repo['visibility'],
                    'file_presence' => $filePresence,
                    'category' => $category,
                    'tags' => $tags                 
                ];
            }
            $allRepos = array_merge($allRepos, $repos);
            $page++;
        }
    } while (!empty($repos));

    // Update MongoDB with filtered data
    $collection->insertOne([
        'updated_at' => date('c'), // ISO 8601 format
        'data' => $allRepos
    ]);

    return $allRepos;
}

set_time_limit(300);

$projects = fetchRepositories($username, $token);
$uniqueTags = fetchUniqueTags($projects);

function fetchUniqueTags($projects) {
    $tags = [];
    if (is_array($projects)) {
        foreach ($projects as $project) {
            // Check if 'tags' is an instance of ArrayObject
            if ($project['tags'] instanceof ArrayObject) {
                // Convert ArrayObject to PHP array
                $projectTags = $project['tags']->getArrayCopy();
                $tags = array_merge($tags, $projectTags);
            } else if (is_array($project['tags'])) {
                // If 'tags' is a simple array, just merge it
                $tags = array_merge($tags, $project['tags']);
            }
        }
    }
    $uniqueTags = array_unique($tags);
    return $uniqueTags;
}

//echo json_encode($projects);