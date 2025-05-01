<?php
require 'connection.php';

$type = $_POST['type']; // 'file' or 'folder'
$id = $_POST['id'];
$newName = $_POST['new_name'];

if ($type === 'folder') {
    $result = $conn->query("SELECT name FROM tbl_folders WHERE id = $id");
    $oldName = $result->fetch_assoc()['name'];

    rename("../uploads/$oldName", "../uploads/$newName");

    $stmt = $conn->prepare("UPDATE tbl_folders SET name = ? WHERE id = ?");
    $stmt->bind_param("si", $newName, $id);
    $stmt->execute();
} else {
    $result = $conn->query("SELECT name, file_path FROM tbl_files WHERE id = $id");
    $row = $result->fetch_assoc();
    $oldPath = $row['file_path'];
    $newPath = dirname($oldPath) . '/' . $newName;

    rename($oldPath, $newPath);

    $stmt = $conn->prepare("UPDATE tbl_files SET name = ?, file_path = ? WHERE id = ?");
    $stmt->bind_param("ssi", $newName, $newPath, $id);
    $stmt->execute();
}

echo "Renamed successfully.";
?>
