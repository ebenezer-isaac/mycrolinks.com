const { Octokit } = require("@octokit/rest");
const fs = require("fs").promises;
require("dotenv").config();

const octokit = new Octokit({
  auth: process.env.GH_PAT,
});

const USERNAME = process.env.GH_USERNAME;

async function checkFilePresence(repoName) {
  const files = ['.personal', '.mycrolinks'];
  let tags = [];

  for (const file of files) {
    try {
      await octokit.repos.getContent({
        owner: USERNAME,
        repo: repoName,
        path: file,
      });
      tags.push(file === '.personal' ? 'personal' : 'mycrolinks');
    } catch (error) {
      if (error.status !== 404) {
        console.error(`Error checking for ${file} in ${repoName}:`, error.message);
      }
    }
  }

  if (tags.length === 2) return 'common';
  if (tags.length === 1) return tags[0];
  return 'private';
}

async function getRepoTags(repoName) {
    try {
        const { data } = await octokit.repos.getContent({
            owner: USERNAME,
            repo: repoName,
            path: '.tags',
        });
        const content = Buffer.from(data.content, 'base64').toString('utf-8');
        return content.split('\n').map(tag => tag.trim()).filter(Boolean);
    } catch (error) {
        if (error.status === 404) {
            return [];
        }
        console.error(`Error fetching .tags for ${repoName}:`, error.message);
        return [];
    }
}


async function fetchAllRepositories() {
  console.log("Fetching all repositories...");
  const repos = await octokit.paginate(octokit.repos.listForUser, {
    username: USERNAME,
    type: 'all',
    per_page: 100,
  });
  console.log(`Found ${repos.length} total repositories.`);

  const allReposData = [];
  for (const repo of repos) {
    const filePresence = await checkFilePresence(repo.name);

    if (filePresence === 'mycrolinks' || filePresence === 'common') {
        const tags = await getRepoTags(repo.name);
        const category = tags[0] || 'misc';
        const remainingTags = tags.slice(1);

        allReposData.push({
            name: repo.name,
            html_url: repo.html_url,
            description: repo.description,
            created_at: repo.created_at,
            updated_at: repo.updated_at,
            visibility: repo.visibility,
            file_presence: filePresence,
            category: category,
            tags: remainingTags,
        });
        console.log(`Processed: ${repo.name} (Category: ${category})`);
    } else {
        console.log(`Skipping: ${repo.name} (File presence: ${filePresence})`);
    }
  }

  return allReposData;
}

async function main() {
  try {
    const projects = await fetchAllRepositories();
    console.log(`\nFiltered down to ${projects.length} projects for the site.`);
    
    projects.sort((a, b) => new Date(b.updated_at) - new Date(a.updated_at));
    
    await fs.writeFile('projects.json', JSON.stringify(projects, null, 2));
    console.log('Successfully wrote projects data to projects.json');
  } catch (error) {
    console.error("An error occurred:", error);
    process.exit(1);
  }
}

main();
