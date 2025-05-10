<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredOtp = $_POST['otp'];

    if (!isset($_SESSION['otp']) || !isset($_SESSION['otp_expires']) || time() > $_SESSION['otp_expires']) {
        echo "expired"; // OTP expired
        exit;
    }

    if ($_SESSION['otp'] == $enteredOtp) {
        echo "success";
        unset($_SESSION['otp']);
        unset($_SESSION['otp_expires']);
    } else {
        echo "invalid"; // Incorrect OTP
    }
}
