<?php
include 'connection.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('User not logged in.'); window.location.href='../login.php';</script>";
    exit();
}

$applied_by = $_SESSION['user_id']; // Logged-in employee ID

// Generate a unique UID
$uid = uniqid('leave_', true);

// Get and validate form data
$leaveType = $_POST['leaveType'];
$fromDate = trim($_POST['fromDate']);

// Check if fromDate is empty
if (empty($fromDate)) {
    echo "<script>alert('From Date is required.'); window.history.back();</script>";
    exit();
}

// Use fromDate as toDate if toDate is not provided
$toDate = empty($_POST['toDate']) ? $fromDate : $_POST['toDate'];

$earnedFor = isset($_POST['earnedForDate']) ? $_POST['earnedForDate'] : null;
$reason = mysqli_real_escape_string($conn, $_POST['leaveReason']);

$documentName = '';
$uploadDir = '../uploads/leavesProof/';

// Handle file upload if present
if (isset($_FILES['supportingDocument']) && $_FILES['supportingDocument']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['supportingDocument']['tmp_name'];
    $originalName = $_FILES['supportingDocument']['name'];
    $fileExt = pathinfo($originalName, PATHINFO_EXTENSION);

    $datePrefix = date('Ymd');
    $safeFileName = $datePrefix . '_' . $applied_by . '_' . preg_replace("/[^a-zA-Z0-9_\-\.]/", "_", basename($originalName));

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $destPath = $uploadDir . $safeFileName;

    if (move_uploaded_file($fileTmpPath, $destPath)) {
        $documentName = $safeFileName;
    } else {
        echo "<script>alert('Failed to upload file.'); window.history.back();</script>";
        exit();
    }
}

// If not earned leave, clear earnedFor
$earnedFor = ($leaveType === 'earned') ? $earnedFor : null;

// Prepare SQL
$sql = "INSERT INTO tbl_leaves (
    uid, applied_by, leave_type, earned_for, from_date, to_date,
    reason, document_name, status, applied_on
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'in_review', NOW())";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "<script>alert('Database error: prepare failed.'); window.history.back();</script>";
    exit();
}

$stmt->bind_param(
    'sissssss',
    $uid,
    $applied_by,
    $leaveType,
    $earnedFor,
    $fromDate,
    $toDate,
    $reason,
    $documentName
);

if ($stmt->execute()) {
    echo "<script>alert('Leave request submitted successfully!'); window.location.href='../Ems/leave_request.php?success=true';</script>";
} else {
    echo "<script>alert('Failed to submit leave request.'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
