<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header('Location: login.php');
    exit();
}

include '../controller/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $role = $_POST['role'];

    $stmt = $conn->prepare("UPDATE users SET username = ?, role = ? WHERE id = ?");
    $stmt->bind_param("ssi", $username, $role, $id);
    if ($stmt->execute()) {
        echo "ข้อมูลผู้ใช้ถูกอัพเดตแล้ว!";
        header('Location: dashboard.php');
        exit();
    } else {
        echo "เกิดข้อผิดพลาดในการอัพเดตข้อมูล!";
    }
} else {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}
?>
<link rel="stylesheet" href="../asset/style.css">

<form method="POST" action="edit_user.php">
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    ชื่อผู้ใช้: <input type="text" name="username" value="<?= $user['username']; ?>" required><br>
    บทบาท:
    <select name="role">
        <option value="user" <?= ($user['role'] == 'user') ? 'selected' : ''; ?>>ผู้ใช้ทั่วไป</option>
        <option value="admin" <?= ($user['role'] == 'admin') ? 'selected' : ''; ?>>ผู้ดูแลระบบ</option>
    </select><br>
    <button type="submit">อัพเดตข้อมูลผู้ใช้</button>
</form>
