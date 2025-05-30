<?php
session_start();
include('../PhpFiles/connection.php'); // Replace with your DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please enter both email and password.";
        header("Location: ../login.php"); // Change to your login page path
        exit();
    }

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM tbl_client WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // If you're using plain text passwords (not recommended), compare directly
        if ($password === $row['password']) {
            // Successful login
            $_SESSION['client_id'] = $row['id']; // You can store more info if needed
            $_SESSION['client_email'] = $row['email'];

            header("Location: ../client_dashboard.php"); // ⬅️ Replace with your actual page
            exit();
        } else {
            $_SESSION['error'] = "Incorrect password.";
            header("Location: client-sign-in.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Email not found.";
        header("Location: client-sign-in.php");
        exit();
    }
} else {
    header("Location: client-sign-in.php");
    exit();
}
?>
 