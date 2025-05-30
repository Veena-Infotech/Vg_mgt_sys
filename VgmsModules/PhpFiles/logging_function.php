<?php
function logFileHistory($conn, $fileId, $action, $user) {
    $stmt = $conn->prepare("INSERT INTO tbl_file_history (fileid, action, performed_by) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $fileId, $action, $user);
    $stmt->execute();
    $stmt->close();
}
?>