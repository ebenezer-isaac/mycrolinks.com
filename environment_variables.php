<?php

// Accessing the MongoDB connection details
$mongoDbConnectionString = getenv('MONGO_DB_CONNECTION_STRING');
$mongoDbName = getenv('MONGO_DB_NAME');
$mongoDbCollectionName = getenv('MONGO_DB_COLLECTION_NAME');

// Accessing the GitHub details
$githubUsername = getenv('GITHUB_USERNAME');
$githubPat = getenv('GITHUB_PAT');

// Example usage
echo "MongoDB Connection String: $mongoDbConnectionString\n";
echo "MongoDB Name: $mongoDbName\n";
echo "MongoDB Collection Name: $mongoDbCollectionName\n";
echo "GitHub Username: $githubUsername\n";
echo "GitHub PAT: $githubPat\n";

// Remember to replace `echo` statements with your actual logic that uses these variables.
