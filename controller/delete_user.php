<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header('Location: login.php');
    exit();
}

include 'db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
if ($stmt->execute()) {
    echo "ลบผู้ใช้เรียบร้อยแล้ว!";
    header('Location: dashboard.php');
    exit();
} else {
    echo "เกิดข้อผิดพลาดในการลบผู้ใช้!";
}
?>