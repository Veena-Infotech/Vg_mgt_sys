<?php
require 'connection.php';

// Decode JSON input
$data = json_decode(file_get_contents("php://input"), true);

$folderName = $data['folder_name'] ?? null;
$parentId = $data['parent_id'] ?? null;

if (!$folderName) {
    echo "Folder name is required.";
    exit;
}

$basePath = '../uploads/';
$folderPath = $basePath;

// If parentId is provided, get the parent folder's full path
if ($parentId) {
    $stmt = $conn->prepare("SELECT name FROM tbl_folders WHERE id = ?");
    $stmt->bind_param("i", $parentId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $parentFolder = $result->fetch_assoc()['name'];
        $folderPath .= $parentFolder . '/';
    }
}

// Final full folder path
$fullPath = $folderPath . $folderName;

// Create folder and update database
if (!is_dir($fullPath)) {
    if (mkdir($fullPath, 0777, true)) {
        $stmt = $conn->prepare("INSERT INTO tbl_folders (name, parent_id) VALUES (?, ?)");
        $stmt->bind_param("si", $folderName, $parentId);
        $stmt->execute();
        echo "Folder created.";
    } else {
        echo "Failed to create folder.";
    }
} else {
    echo "Folder already exists.";
}
?>
