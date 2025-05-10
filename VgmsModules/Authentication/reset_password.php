<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../PhpFiles/connection.php';

    if (!isset($_SESSION['otp_email'])) {
        echo "Session expired or invalid.";
        exit;
    }

    $email = $_SESSION['otp_email'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("UPDATE tbl_emp SET Password = ? WHERE official_email = ?");
    $stmt->bind_param("ss", $hashedPassword, $email);

    if ($stmt->execute()) {
        echo "success";
        // Optional: unset OTP session values after success
        unset($_SESSION['otp']);
        unset($_SESSION['otp_email']);
        unset($_SESSION['otp_expires']);
    } else {
        echo "Database error.";
    }

    $stmt->close();
    $conn->close();
}
?>
