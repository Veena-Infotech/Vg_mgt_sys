<?php
include '../PhpFiles/connection.php';

if (isset($_POST['note_title'], $_POST['note_content'])) {
    $title = mysqli_real_escape_string($conn, $_POST['note_title']);
    $content = mysqli_real_escape_string($conn, $_POST['note_content']);

    $sql = "INSERT INTO tbl_pin_board (pinboard_title, pinboard_content, is_archived)
            VALUES ('$title', '$content', 0)";
    
    if (mysqli_query($conn, $sql)) {
        $id = mysqli_insert_id($conn);
        echo json_encode(['success' => true, 'id' => $id]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Missing fields']);
}
?>
