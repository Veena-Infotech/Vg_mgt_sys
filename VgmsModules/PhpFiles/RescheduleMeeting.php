<?php
include 'connection.php';
session_start();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $meeting_id = $_GET['id'];

    // Prepare and execute the update query
    $sql = "UPDATE tbl_meeting_history SET meeting_status = 'Rescheduled' WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'i', $meeting_id);
        if (mysqli_stmt_execute($stmt)) {
            // Redirect or notify user
            header("Location: ../Vms/Employee_side_Meeting.php?msg=reschedule_success"); // change to your listing page
            exit();
        } else {
            echo "Error updating meeting status.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare statement.";
    }
} else {
    echo "Invalid meeting ID.";
}
?>
