<?php
include 'connection.php'; // Make sure connection.php is correct

// Helper function to sanitize folder name
function sanitize_folder_name($string)
{
    return preg_replace('/[^a-zA-Z0-9-_]/', '_', strtolower($string));
}

//Get form data
