<?php
include 'connection.php';
include 'logging_function.php';
session_start();

$data = json_decode(file_get_contents("php://input"));

if (isset($data->room_id, $data->room_name)) {
    $room_id = intval($data->room_id);
    $room_name = trim($data->room_name);

    if ($room_name === '') {
        echo json_encode(["status" => "error", "message" => "Room name is empty."]);
        exit;
    }

    // Fetch old room name (optional, for logging context)
    $stmt = $conn->prepare("SELECT room_name FROM tbl_rooms WHERE id = ?");
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $stmt->bind_result($oldRoomName);
    $stmt->fetch();
    $stmt->close();

    // Update room name
    $stmt = $conn->prepare("UPDATE tbl_rooms SET room_name = ? WHERE id = ?");
    $stmt->bind_param("si", $room_name, $room_id);

    if ($stmt->execute()) {
        // Get user performing the action
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

        // Log update action
        $action = "Room name updated from '$oldRoomName' to '$room_name'";
        logFileHistory($conn, 0, $action, $userName); // fileid = 0 for non-file actions

        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to update room."]);
    }

    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Missing parameters."]);
}
?>
