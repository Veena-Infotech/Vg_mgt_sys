<?php
include './connection.php';

header('Content-Type: application/json');

if (!isset($_GET['file_id']) || !ctype_digit($_GET['file_id'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid or missing file_id parameter.'
    ]);
    exit;
}

$file_id = (int)$_GET['file_id'];

$stmt = $conn->prepare("SELECT id, room_name, cupboard_name FROM tbl_fms WHERE id = ?");
if (!$stmt) {
    die(json_encode([
        'status' => 'error',
        'message' => 'Prepare failed: (' . $conn->errno . ') ' . $conn->error
    ]));
}

$stmt->bind_param("i", $file_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode([
        'status' => 'error',
        'message' => 'File not found.'
    ]);
    exit;
}

$file = $result->fetch_assoc();

echo json_encode([
    'status' => 'success',
    'file' => $file
]);
