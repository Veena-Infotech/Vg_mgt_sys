<?php

session_start(); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; // or include PHPMailer manually

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $otp = rand(100000, 999999); // Generate 6-digit OTP

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'aryanshirodkar03@gmail.com';       // your Gmail
        $mail->Password   = 'xwsi nvsp xgqr eusi';          // app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('aryanshirodkar03@gmil.com', 'Veena Infotech');   
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Your OTP Code';
        $mail->Body    = "Hello,<br>Your OTP is: <strong>$otp</strong>";
        $mail->AltBody = "Hello, your OTP is: $otp";

        $mail->send();

        $_SESSION['otp'] = $otp;
        $_SESSION['otp_email'] = $email;
        $_SESSION['otp_expires'] = time() + (5 * 60);

        echo "OTP sent to $email";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>
