<?php
include './connection.php';
include './logging_function.php';
session_start();

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// Get and sanitize inputs
$fileId = filter_input(INPUT_POST, 'file_id', FILTER_VALIDATE_INT);
$actionType = $_POST['action'] ?? '';
$reason = trim($_POST['reason'] ?? '');

// Validate essential parameters
if (!$fileId || !in_array($actionType, ['IN', 'OUT'], true)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid parameters.']);
    exit;
}

// Check if user is logged in
$userId = $_SESSION['user_id'] ?? null;
if (!$userId) {
    echo json_encode(['status' => 'error', 'message' => 'User not authenticated.']);
    exit;
}

// Fetch username from database
$username = 'system';
$stmt = $conn->prepare("SELECT f_name FROM tbl_emp WHERE id = ?");
if (!$stmt) {
    echo json_encode(['status' => 'error', 'message' => 'DB error: ' . $conn->error]);
    exit;
}
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($f_name);
if ($stmt->fetch()) {
    $username = $f_name;
}
$stmt->close();

try {
    if ($actionType === 'OUT') {
        // Update for OUT action with reason safely bound
        $stmt = $conn->prepare("UPDATE tbl_fms 
            SET current_status = 'OUT', 
                taken_by = ?, 
                taken_time = NOW(), 
                reason = ?,
                returned_by = NULL, 
                returned_time = NULL 
            WHERE id = ?");
        if (!$stmt)
            throw new Exception($conn->error);

        $stmt->bind_param("ssi", $username, $reason, $fileId);
        $logAction = "File marked OUT by $username" . ($reason ? " | Reason: $reason" : "");

    } else { // IN action - location will not change
        $stmt = $conn->prepare("UPDATE tbl_fms 
    SET current_status = 'IN', 
        returned_by = ?, 
        returned_time = NOW()
    WHERE id = ?");
        if (!$stmt)
            throw new Exception($conn->error);

        $stmt->bind_param("si", $username, $fileId);
        $logAction = "File returned (IN) by $username";

        if ($stmt->execute()) {
            logFileHistory($conn, $fileId, $logAction, $username);
            echo json_encode(['status' => 'success', 'message' => "File marked IN successfully."]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update file status: ' . $stmt->error]);
        }

    }

    if ($stmt->execute()) {
        logFileHistory($conn, $fileId, $logAction, $username);
        echo json_encode(['status' => 'success', 'message' => "File marked $actionType successfully."]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update file status: ' . $stmt->error]);
    }

    $stmt->close();

} catch (Exception $ex) {
    echo json_encode(['status' => 'error', 'message' => 'Exception: ' . $ex->getMessage()]);
}

$conn->close();
?>