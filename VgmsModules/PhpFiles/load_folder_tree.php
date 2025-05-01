<?php
require 'connection.php';

$sql = "SELECT * FROM tbl_folders ORDER BY parent_id, name";
$result = $conn->query($sql);

$folders = [];
while ($row = $result->fetch_assoc()) {
    $folders[] = $row;
}

header('Content-Type: application/json');
echo json_encode($folders);
?>
