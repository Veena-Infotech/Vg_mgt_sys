<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meetingId = intval($_POST['meeting_id']);
    $newStatus = $_POST['status']; // Or 'action', depending on your form

    $validStatuses = ['Scheduled', 'InProgress', 'Completed', 'Rescheduled'];
    if (!in_array($newStatus, $validStatuses)) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=invalid_status");
        exit;
    }

    $sql = "UPDATE tbl_meeting_history SET meeting_status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newStatus, $meetingId);

    if ($stmt->execute()) {
        header("Location: ../Vms/LobbyManagement.php?status=success");
        exit;
    } else {
        // header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=db_error");
        header("Location: ../Vms/LobbyManagement.php?error=db_error");
exit;

    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=invalid_request");
}
exit;
