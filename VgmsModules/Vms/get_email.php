<?php
// get_email.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    include '../PhpFiles/connection.php';

    $stmt = $conn->prepare("SELECT email FROM tbl_visitor WHERE id = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();

    if ($stmt->fetch()) {
        echo $email;
    } else {
        echo '';
    }

    $stmt->close();
    $conn->close();
}
?>
