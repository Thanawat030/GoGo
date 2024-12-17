<?php
include 'db.php';


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];


$username = $_SESSION['username'];
$role = $_SESSION['role'];


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $filename = $_FILES['file']['name'];
    $temp_path = $_FILES['file']['tmp_name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'pdf', 'docx'];

    if (!in_array($file_extension, $allowed_extensions)) {
        echo "ไฟล์ที่อัปโหลดไม่อนุญาต!";
        exit();
    }

    $unique_filename = uniqid() . '.' . $file_extension;
    $file_path = '../uploads/' . $unique_filename;

    if (move_uploaded_file($temp_path, $file_path)) {
  
        $stmt = $conn->prepare("INSERT INTO documents (filename, file_path, user_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $filename, $file_path, $user_id);
        if ($stmt->execute()) {
            $document_id = $stmt->insert_id;

        
            $stmt_upload = $conn->prepare("INSERT INTO uploads (user_id, document_id) VALUES (?, ?)");
            $stmt_upload->bind_param("ii", $user_id, $document_id);
            $stmt_upload->execute();


        } else {

        }
    }
}

if ($role == 'admin') {
    $sql = "SELECT * FROM documents";
    $result = mysqli_query($conn, $sql);
    $documents = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $documents[] = $row;
    }
}
?>
