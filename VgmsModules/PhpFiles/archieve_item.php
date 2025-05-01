<?php
require 'connection.php';

$type = $_POST['type']; // 'file' or 'folder'
$id = $_POST['id'];

if ($type === 'folder') {
    $res = $conn->query("SELECT name FROM tbl_folders WHERE id = $id");
    $name = $res->fetch_assoc()['name'];

    rename("../uploads/$name", "../archive/$name");
    $conn->query("UPDATE tbl_folders SET is_archived = 1 WHERE id = $id");
} else {
    $res = $conn->query("SELECT name, file_path FROM tbl_files WHERE id = $id");
    $file = $res->fetch_assoc();
    $newPath = str_replace("/uploads/", "/archive/", $file['file_path']);

    rename($file['file_path'], $newPath);
    $conn->query("UPDATE tbl_files SET is_archived = 1, file_path = '$newPath' WHERE id = $id");
}

echo "Archived.";
?>
