<?php
header('Content-Type: application/json');
session_start(); // Required to access session data

require_once 'connection.php';

try {
    // Check login
    if (!isset($_SESSION['user_id'])) {
        throw new Exception("User not logged in.");
    }

    $userId = $_SESSION['user_id'];

    // Fetch user's name
    $stmtUser = $conn->prepare("SELECT f_name FROM tbl_emp WHERE id = ?");
    $stmtUser->bind_param("i", $userId);
    $stmtUser->execute();
    $stmtUser->bind_result($userName);
    $stmtUser->fetch();
    $stmtUser->close();

    if (empty($userName)) {
        throw new Exception("Logged-in user not found.");
    }

    // Validate POST variables
    if (!isset($_POST['fms_id'], $_POST['room_name'], $_POST['cubboard_name'], $_POST['file_name'])) {
        throw new Exception("Missing required POST data.");
    }

    // Sanitize input
    $fms_id = intval($_POST['fms_id']);
    $room_name = trim($_POST['room_name']);
    $cubboard_name = trim($_POST['cubboard_name']);
    $file_name = trim($_POST['file_name']);

    if ($fms_id <= 0 || $room_name === '' || $cubboard_name === '' || $file_name === '') {
        throw new Exception("Invalid input. All fields are required.");
    }

    // Prepare update
    $stmt = $conn->prepare("UPDATE tbl_fms SET room_name = ?, cubboard_name = ?, file_name = ?, added_by = ? WHERE id = ?");
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssssi", $room_name, $cubboard_name, $file_name, $userName, $fms_id);

    if (!$stmt->execute()) {
        throw new Exception("Execute failed: " . $stmt->error);
    }

    if ($stmt->affected_rows === 0) {
        echo json_encode([
            'status' => 'warning',
            'message' => 'No changes made or record not found.'
        ]);
    } else {
        echo json_encode([
            'status' => 'success',
            'message' => 'Record updated successfully.'
        ]);
    }

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
    exit;
}
