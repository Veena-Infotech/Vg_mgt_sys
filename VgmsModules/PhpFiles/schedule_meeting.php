<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $visitor_id = $_POST['visitorName'];
    $emp_id = $_POST['whomToMeet'];
    $reason = $_POST['reason'];

    $uid = uniqid("meet_");
    $date = date('Y-m-d');
    $time = date('H:i:s');

    $insertMeeting = "INSERT INTO tbl_meeting_history (uid, date, time, visitor_id, emp_id, reason)
                      VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($insertMeeting);
    $stmt->bind_param("sssiss", $uid, $date, $time, $visitor_id, $emp_id, $reason);

    if ($stmt->execute()) {
        header("Location: ../Vms/Receptionist-dashboard.php?success=true");
        exit;
    } else {
        header("Location: ../Vms/New-Registration.php?success=false");
        exit;
    }
}
?>
