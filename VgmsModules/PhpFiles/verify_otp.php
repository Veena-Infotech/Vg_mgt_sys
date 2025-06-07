<?php
session_start();
error_reporting(E_ALL); // Optional for debugging
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredOtp = trim($_POST['otp']);

    // ✅ Validate that OTP is a 6-digit number
    if (!preg_match('/^\d{6}$/', $enteredOtp)) {
        echo "invalid";
        exit;
    }

    // ⏰ Check if OTP and expiry exist and are valid
    if (!isset($_SESSION['otp']) || !isset($_SESSION['otp_expires']) || time() > $_SESSION['otp_expires']) {
        echo "expired";
        unset($_SESSION['otp']);
        unset($_SESSION['otp_expires']);
        unset($_SESSION['otp_email']);
        exit;
    }

    // 🚫 Too many attempts check (optional security feature)
    $_SESSION['otp_attempts'] = ($_SESSION['otp_attempts'] ?? 0) + 1;
    if ($_SESSION['otp_attempts'] > 5) {
        echo "too_many_attempts";
        exit;
    }

    // ✅ Compare OTP securely
    if (hash_equals((string)$_SESSION['otp'], (string)$enteredOtp)) {
        echo "success";
        unset($_SESSION['otp']);
        unset($_SESSION['otp_expires']);
        unset($_SESSION['otp_email']);
        unset($_SESSION['otp_attempts']);
        exit;
    } else {
        echo "invalid";
        exit;
    }
}
?>
