<?php
include('connection.php'); // Adjust the path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $emp_id = $_POST['whomToMeet'];
    $reason = $_POST['reason'];
    $imageData = $_POST['capturedImage']; // base64 image data
    $address = ""; // Update if address field is added

    // Separate name into first, middle, last
    $nameParts = explode(" ", trim($name));
    $f_name = $nameParts[0];
    $m_name = isset($nameParts[1]) ? $nameParts[1] : "";
    $l_name = isset($nameParts[2]) ? $nameParts[2] : "";

    $date = date('Y-m-d');
    $time = date('H:i:s');
    $visitor_uid = uniqid("visitor_");

    // Insert into tbl_visitor
    $insertVisitor = "INSERT INTO tbl_visitor 
        (uid, f_name, m_name, l_name, phone_no, email, address, img, registered_date)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt1 = $conn->prepare($insertVisitor);

    // Temporary image name, will rename after insert
    $tempImgName = "temp.jpg";

    $stmt1->bind_param("sssssssss", $visitor_uid, $f_name, $m_name, $l_name, $phone, $email, $address, $tempImgName, $date);

    if ($stmt1->execute()) {
        $visitor_id = $stmt1->insert_id;
        $img_filename = "visitor_" . $visitor_id . ".jpg";
        $uploadPath = "../uploads/visitor_img/" . $img_filename;

        // Decode and save image
        if (!empty($imageData)) {
            $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
            $imageData = base64_decode($imageData);
            file_put_contents($uploadPath, $imageData);
        }

        // Update image name in DB
        $updateImg = "UPDATE tbl_visitor SET img=? WHERE id=?";
        $stmt2 = $conn->prepare($updateImg);
        $stmt2->bind_param("si", $img_filename, $visitor_id);
        $stmt2->execute();

        // Insert meeting history
        $meeting_uid = uniqid("meet_");
        $insertMeeting = "INSERT INTO tbl_meeting_history (uid, date, time, visitor_id, emp_id, reason)
                          VALUES (?, ?, ?, ?, ?, ?)";
        $stmt3 = $conn->prepare($insertMeeting);
        $stmt3->bind_param("sssiss", $meeting_uid, $date, $time, $visitor_id, $emp_id, $reason);

        if ($stmt3->execute()) {
            echo "Visitor registered and meeting logged successfully.";
            header('Location: ../Vms/Receptionist-dashboard.php?success=true');
            exit();
        } else {
            header('Location: ../Vms/New-Registration.php?success=false');
            exit();
        }
    } else {
        header('Location: ../Vms/New-Registration.php?success=false');
        exit();
    }
}
