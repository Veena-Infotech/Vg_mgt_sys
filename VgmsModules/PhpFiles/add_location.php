<?php
// Only allow POST method
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit;
}

// Headers for JSON response
header("Content-Type: application/json");

// Include DB connection
include 'connection.php'; // Adjust the path if needed

// Start session to get user info
session_start();

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    http_response_code(403); // Forbidden
    echo json_encode(["status" => "error", "message" => "User not logged in."]);
    exit;
}

$userId = $_SESSION['user_id'];

// Get and decode the raw JSON data
$data = json_decode(file_get_contents("php://input"), true);

// Validate required fields
if (
    !isset($data['file_name'], $data['cupboard'], $data['room_id']) ||
    empty(trim($data['file_name'])) ||
    empty(trim($data['cupboard'])) ||
    !is_numeric($data['room_id'])
) {
    http_response_code(400); // Bad Request
    echo json_encode(["status" => "error", "message" => "Missing or invalid fields."]);
    exit;
}

$fileName = trim($data['file_name']);
$cupboard = trim($data['cupboard']);
$roomId = (int) $data['room_id'];

// Optional input validations
if (strlen($fileName) < 3 || strlen($fileName) > 255) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid file name."]);
    exit;
}

if (strlen($cupboard) < 3 || strlen($cupboard) > 255) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid cupboard name."]);
    exit;
}

// Fetch user's name from tbl_emp
$stmt = $conn->prepare("SELECT f_name FROM tbl_emp WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($userName);
$stmt->fetch();
$stmt->close();

if (empty($userName)) {
    http_response_code(404); // Not Found
    echo json_encode(["status" => "error", "message" => "User not found."]);
    exit;
}

// Fetch room name from room ID
$stmt = $conn->prepare("SELECT room_name FROM tbl_rooms WHERE id = ?");
$stmt->bind_param("i", $roomId);
$stmt->execute();
$stmt->bind_result($roomName);
$stmt->fetch();
$stmt->close();

if (empty($roomName)) {
    http_response_code(404); // Not Found
    echo json_encode(["status" => "error", "message" => "Room not found."]);
    exit;
}

// Insert data into tbl_fms
$stmt = $conn->prepare("INSERT INTO tbl_fms (file_name, cubboard_name, room_name, added_by) VALUES (?, ?, ?, ?)");
if (!$stmt) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Database prepare error: " . $conn->error]);
    exit;
}

$stmt->bind_param("ssss", $fileName, $cupboard, $roomName, $userName);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Location added successfully."]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Failed to add location: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>