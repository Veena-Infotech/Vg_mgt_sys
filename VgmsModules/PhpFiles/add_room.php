<?php
include '../Phpfiles/connection.php';
include '../Phpfiles/logging_function.php';
session_start();

$room_name = $_POST['room_name'] ?? '';
$office_id = intval($_POST['office_id'] ?? 0);

// Get user
$userId = $_SESSION['user_id'] ?? null;
$userName = 'Unknown';

if ($userId) {
    $userStmt = $conn->prepare("SELECT f_name FROM tbl_emp WHERE id = ?");
    $userStmt->bind_param("i", $userId);
    $userStmt->execute();
    $userStmt->bind_result($userName);
    $userStmt->fetch();
    $userStmt->close();
}

if (!empty($room_name) && $office_id > 0) {
    $stmt = $conn->prepare("INSERT INTO tbl_rooms (room_name, office_id) VALUES (?, ?)");
    $stmt->bind_param("si", $room_name, $office_id);
    $newroom_id = $stmt->insert_id; // Get the new room ID
    if ($stmt->execute()) {
        // Log creation (room_id is not file ID, so we pass 0)
        logFileHistory($conn, $newroom_id, "Room Created: $room_name in Office ID $office_id", $userName);
        echo "success";
    } else {
        echo "DB error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid input";
}
?>
