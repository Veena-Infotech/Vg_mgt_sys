<?php
// get_email.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    include '../PhpFiles/connection.php';

    $stmt = $conn->prepare("SELECT email FROM tbl_client WHERE client_name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->bind_result($email);

    if ($stmt->fetch()) {
        echo $email;
    } else {
        echo '';
    }

    $stmt->close();
    $conn->close();
}
?>
