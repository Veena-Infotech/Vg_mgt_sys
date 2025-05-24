<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit;
}

include 'connection.php';

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['room_name'], $data['office_id']) || empty(trim($data['room_name'])) || !is_numeric($data['office_id'])) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid input."]);
    exit;
}

$roomName = trim($data['room_name']);
$officeId = (int) $data['office_id'];

$stmt = $conn->prepare("INSERT INTO tbl_rooms (room_name, office_id) VALUES (?, ?)");
$stmt->bind_param("si", $roomName, $officeId);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "room_id" => $stmt->insert_id]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Insert failed: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
