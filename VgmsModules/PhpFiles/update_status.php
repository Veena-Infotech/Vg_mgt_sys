<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meetingId = intval($_POST['meeting_id']);
    $newStatus = $_POST['status'];

    $validStatuses = ['Scheduled', 'InProgress', 'Completed', 'Rescheduled'];
    if (!in_array($newStatus, $validStatuses)) {
        header("Location: ../vms/LobbyManagement.php?error=invalid_status");
        exit;
    }

    $sql = "UPDATE tbl_meeting_history SET meeting_status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newStatus, $meetingId);

    if ($stmt->execute()) {
        header("Location: ../vms/LobbyManagement.php?status=success");
    } else {
        header("Location: ../vms/LobbyManagement.php?error=db_error");
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: ../vms/LobbyManagement.php?error=invalid_request");
}
exit;
?>
