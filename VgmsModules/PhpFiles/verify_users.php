<?php
session_start();
include 'connection.php';

$email = trim($_POST['email']);
$password = $_POST['password'];

$action = "login_request";
$status = "failed";

// Function to get client IP
function getClientIP() {
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

// Fetch user by email
$stmt = $conn->prepare("SELECT id, password, position FROM tbl_emp WHERE official_email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $emp_id = $user['id'];
    $hashed_password = $user['password'];

    if (password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $emp_id;
        $status = "completed";

        // Log successful login
        $log_stmt = $conn->prepare("INSERT INTO tbl_logs (emp_id, action, status, ip_address, user_agent) VALUES (?, ?, ?, ?, ?)");
        $log_stmt->bind_param("issss", $emp_id, $action, $status, $ip_address, $user_agent);
        $log_stmt->execute();

        if (strtolower($user['position']) === 'receptionist') {
            header("Location: ../Vms/Receptionist-dashboard.php");
            exit();
        } else {
            // Not authorized role
            $_SESSION['login_error'] = "Access denied: Only receptionists can log in here.";
            header("Location: ../Authentication/Sign-in.php?status=unauthorized");
            exit();
        }
    } else {
        // Log failed attempt
        $log_stmt = $conn->prepare("INSERT INTO tbl_logs (emp_id, action, status, ip_address, user_agent) VALUES (?, ?, ?, ?, ?)");
        $log_stmt->bind_param("issss", $emp_id, $action, $status, $ip_address, $user_agent);
        $log_stmt->execute();

        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: ../Authentication/Sign-in.php?status=failed");
        exit();
    }
} else {
    // Email not found
    $emp_id = 0;
    $log_stmt = $conn->prepare("INSERT INTO tbl_logs (emp_id, action, status, ip_address, user_agent) VALUES (?, ?, ?, ?, ?)");
    $log_stmt->bind_param("issss", $emp_id, $action, $status, $ip_address, $user_agent);
    $log_stmt->execute();

    $_SESSION['login_error'] = "Invalid email or password.";
    header("Location: ../Authentication/Sign-in.php?status=failed");
    exit();
}
