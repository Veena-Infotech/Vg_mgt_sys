<?php
require 'connection.php';

$folderId = $_POST['folder_id'];
$file = $_FILES['file'];

$result = $conn->query("SELECT name FROM tbl_folders WHERE id = $folderId");
$folder = $result->fetch_assoc()['name'];
$uploadDir = "../uploads/$folder/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$filename = basename($file['name']);
$targetPath = $uploadDir . $filename;

if (move_uploaded_file($file['tmp_name'], $targetPath)) {
    $stmt = $conn->prepare("INSERT INTO tbl_files (name, folder_id, file_path, file_type) VALUES (?, ?, ?, ?)");
    $fileType = pathinfo($filename, PATHINFO_EXTENSION);
    $stmt->bind_param("siss", $filename, $folderId, $targetPath, $fileType);
    $stmt->execute();
    echo "File uploaded.";
} else {
    echo "Upload failed.";
}
?>
