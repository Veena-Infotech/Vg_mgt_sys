<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'connection.php';

    $name = $_POST['visitorName'] ?? '';

    $stmt = $conn->prepare("SELECT email FROM tbl_visitor WHERE id = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->bind_result($email);

    if (!$stmt->fetch()) {
        echo "Email not found for this visitor.";
        $stmt->close();
        $conn->close();
        exit;
    }

    $stmt->close();
    $conn->close();

    $otp = rand(100000, 999999);
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'aryanshirodkar03@gmail.com';
        $mail->Password   = 'xwsi nvsp xgqr eusi';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('aryanshirodkar03@gmail.com', 'Veena Infotech');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Your OTP Code';
        $mail->Body    = "Hello,<br>Your OTP is: <strong>$otp</strong>";
        $mail->AltBody = "Hello, your OTP is: $otp";

        $mail->send();

        $_SESSION['otp'] = $otp;
        $_SESSION['otp_email'] = $email;
        $_SESSION['otp_expires'] = time() + (5 * 60); // 5 minutes

        echo "OTP has been sent to the visitor's registered email.";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
