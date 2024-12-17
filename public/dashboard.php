<?php
include '../controller/userController.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การจัดการผู้ใช้</title>
    <link rel="stylesheet" href="../asset/style.css"> 
</head>
<body>
  <header>
        <a href="dashboard.php">ผู้ใช้</a>
        <a href="upload.php">อัพโหลดไฟล์</a>
        <a href="upload_time.php">เวลาการอัพโหลด</a>
  </header>
  </header>
    <div class="container">
        <h2>ยินดีต้อนรับ, <?= $_SESSION['username']; ?> (<?= $_SESSION['role']; ?>)</h2>
        <h3>การจัดการผู้ใช้</h3>

        <!-- แสดงรายการผู้ใช้ทั้งหมด -->
        <table>
            <tr>
                <th>ชื่อผู้ใช้</th>
                <th>บทบาท</th>
                <th>email</th>
                <th>การกระทำ</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['role']; ?></td>
                    <td><?= $user['email']?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $user['id']; ?>">แก้ไข</a> | 
                        <a href="../controller/delete_user.php?id=<?= $user['id']; ?>">ลบ</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br>
        <a href="../controller/logout.php">ออกจากระบบ</a>
    </div>
</body>
</html>
