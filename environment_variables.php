<?php

// Accessing the MongoDB connection details
$mongoDbConnectionString = getenv('MONGO_DB_CONNECTION_STRING');
$mongoDbCollectionName = getenv('MONGO_DB_COLLECTION_NAME');
$mongoDbName = getenv('MONGO_DB_NAME');

// Accessing the GitHub details
$githubUsername = getenv('GH_USERNAME');
$githubPat = getenv('GH_PAT');


// Example usage
echo "MongoDB Connection String: $mongoDbConnectionString\n";
echo "<br>";
echo "MongoDB Name: $mongoDbName\n";
echo "<br>";
echo "MongoDB Collection Name: $mongoDbCollectionName\n";
echo "<br>";
echo "GitHub Username: $githubUsername\n";
echo "<br>";
echo "GitHub PAT: $githubPat\n";

// Remember to replace `echo` statements with your actual logic that uses these variables.
