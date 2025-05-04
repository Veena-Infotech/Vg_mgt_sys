<?php
// Only allow POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit;
}

// Headers
header("Content-Type: application/json");

// Include DB connection
include 'connection.php'; // Adjust path if needed

// Validate input
$roomname = trim($_POST['roomname'] ?? '');
$cupboardName = trim($_POST['cupboard_name'] ?? '');

if (empty($cupboardName) || empty($roomname)) {
    http_response_code(400); // Bad Request
    echo json_encode([
        "status" => "error",
        "message" => "Room name and cupboard name are required."
    ]);
    exit;
}

// Prepare and insert
$stmt = $conn->prepare("INSERT INTO shelfs_cubboards (name, room_name) VALUES (?, ?)");
if (!$stmt) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Database prepare error: " . $conn->error
    ]);
    exit;
}

$stmt->bind_param("ss", $cupboardName, $roomname);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Cupboard added successfully."]);
} else {
    http_response_code(500); // Internal Server Error
    echo json_encode([
        "status" => "error",
        "message" => "Failed to add cupboard: " . $stmt->error
    ]);
}

$stmt->close();
$conn->close();
?>
