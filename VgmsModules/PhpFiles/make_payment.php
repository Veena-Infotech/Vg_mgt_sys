<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meeting_id = $_POST['meeting_id'] ?? null;
    $amount = $_POST['amount'] ?? null;
    $type = $_POST['type'] ?? null;

    if (!$meeting_id || !$amount || !$type) {
        die("Missing required fields.");
    }

    // Get visitor_id from meeting
    $stmt = $conn->prepare("SELECT visitor_id FROM tbl_meeting_history WHERE id = ?");
    $stmt->bind_param("i", $meeting_id);
    $stmt->execute();
    $stmt->bind_result($visitor_id);
    $stmt->fetch();
    $stmt->close();

    if (!$visitor_id) die("Visitor not found.");

    // Get client_id from visitor
    $stmt = $conn->prepare("SELECT reference_id FROM tbl_visitor WHERE id = ?");
    $stmt->bind_param("i", $visitor_id);
    $stmt->execute();
    $stmt->bind_result($client_id);
    $stmt->fetch();
    $stmt->close();

    if (!$client_id) die("Client not found.");

    // Insert into tbl_payment
    $uid = uniqid('PAY_');
    $payment_date = date("Y-m-d");

    $stmt = $conn->prepare("INSERT INTO tbl_payment (uid, amount, type, client_id, payment_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdsis", $uid, $amount, $type, $client_id, $payment_date);

    if ($stmt->execute()) {
    // Update meeting status
    $stmt2 = $conn->prepare("UPDATE tbl_meeting_history SET payment_status = ?, payment_mode = ?, amount = ? WHERE id = ?");
    $paidStatus = $type === 'Denied' ? 'Unpaid' : 'Paid';
    $stmt2->bind_param("ssdi", $paidStatus, $type, $amount, $meeting_id);
    $stmt2->execute();
    $stmt2->close();

    // Redirect with status
    header("Location: ../Vms/Receptionist-dashboard.php?status=success&type=" . urlencode($type));
    exit;
}


} else {
    echo "Error inserting payment.";
}



    $stmt->close();
    $conn->close();

?>
