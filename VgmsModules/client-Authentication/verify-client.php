<?php
session_start();
include 'connection.php';

$email = trim($_POST['email']);
$password = $_POST['password'];

$action = "client_login_request";
$status = "failed";

// Function to get client IP
function getClientIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Get client IP and user agent
$ip_address = getClientIP();
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

// Fetch client by email
$stmt = $conn->prepare("SELECT id, password FROM tbl_client WHERE official_email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $client = $result->fetch_assoc();
    $client_id = $client['id'];
    $hashed_password = $client['password'];

    if (password_verify($password, $hashed_password)) {
        $_SESSION['client_id'] = $client_id;
        $status = "completed";

        // Log successful login
        $log_stmt = $conn->prepare("INSERT INTO tbl_logs (emp_id, action, status, ip_address, user_agent) VALUES (?, ?, ?, ?, ?)");
        $log_stmt->bind_param("issss", $client_id, $action, $status, $ip_address, $user_agent);
        $log_stmt->execute();

        header("Location: ../Crm/index.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Incorrect email or password.";
        $log_stmt = $conn->prepare("INSERT INTO tbl_logs (emp_id, action, status, ip_address, user_agent) VALUES (?, ?, ?, ?, ?)");
        $log_stmt->bind_param("issss", $client_id, $action, $status, $ip_address, $user_agent);
        $log_stmt->execute();

        header("Location: ../client-Authentication/client-sign-in.php?status=failed");
        exit();
    }
} else {
    $client_id = 0;
    $_SESSION['login_error'] = "Incorrect email or password.";
    $log_stmt = $conn->prepare("INSERT INTO tbl_logs (emp_id, action, status, ip_address, user_agent) VALUES (?, ?, ?, ?, ?)");
    $log_stmt->bind_param("issss", $client_id, $action, $status, $ip_address, $user_agent);
    $log_stmt->execute();

    header("Location: ../client-Authentication/client-sign-in.php?status=failed");
    exit();
}
