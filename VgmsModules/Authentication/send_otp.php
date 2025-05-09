<?php
session_start();

// 1. Get the email from POST
if (!isset($_POST['email']) || empty($_POST['email'])) {
    echo "Email is required.";
    exit;
}

$email = $_POST['email'];

// 2. Generate 6-digit OTP
$otp = rand(100000, 999999);

// 3. Store OTP in session
$_SESSION['otp'] = $otp;
$_SESSION['email'] = $email;

// 4. Email content
$subject = "Your OTP for Veena Group Access Hub";
$message = "Dear User,\n\nYour One-Time Password (OTP) is: $otp\n\nPlease do not share this with anyone.\n\nRegards,\nVeena Group";
$headers = "From: no-reply@veenagroup.com";

// 5. Send email
if (mail($email, $subject, $message, $headers)) {
    echo "OTP sent successfully.";
} else {
    echo "Failed to send OTP.";
}
?>
