<?php
include 'connection.php';
include 'logging_function.php'; // This should define logFileHistory()

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $officeName = trim($_POST['office_name']);

    // Get the user name from session
    $userId = $_SESSION['user_id'] ?? null;
    $userName = 'Unknown';

    if ($userId) {
        $stmt = $conn->prepare("SELECT f_name FROM tbl_emp WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $stmt->bind_result($userName);
        $stmt->fetch();
        $stmt->close();
    }

    if (!empty($officeName)) {
        $stmt = $conn->prepare("INSERT INTO tbl_offices (office_name) VALUES (?)");
        $stmt->bind_param("s", $officeName);
        if ($stmt->execute()) {
            $newOfficeId = $stmt->insert_id;
$srno = $newOfficeId; // Assuming srno is the same as the new office ID
            // Log action - optional if you're tracking office actions
            logFileHistory($conn, $srno, "New Office Created: $officeName", $userName);

            echo json_encode(['status' => 'success', 'id' => $newOfficeId, 'office_name' => $officeName]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Database error']);
        }
        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Office name cannot be empty']);
    }

    $conn->close();
}
?>
