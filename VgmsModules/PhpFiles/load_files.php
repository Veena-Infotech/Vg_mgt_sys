<?php
require 'connection.php';

$folderId = $_GET['folder_id'];

if($folderId == null){
    $folderId = 1;
}

$sql = "SELECT * FROM tbl_files WHERE folder_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $folderId);
$stmt->execute();
$result = $stmt->get_result();

$files = [];
while ($row = $result->fetch_assoc()) {
    // Prepend uploads path if not full URL
    $filePath = $row['file_path'];
    if (!str_starts_with($filePath, 'http') && !str_starts_with($filePath, '../uploads/')) {
        $filePath = '../uploads/' . $filePath;
    }
    $row['file_path'] = $filePath;
    $files[] = $row;
}

echo json_encode($files);
?>
