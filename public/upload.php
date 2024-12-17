<?php
session_start();
include '../controller/uploadController.php'; 
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/style.css">
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <a href="dashboard.php">ผู้ใช้</a>
                <a href="upload.php">อัพโหลดไฟล์</a>
                <a href="upload_time.php">เวลาการอัพโหลด</a>
            </nav>
        </header>

        <h2>ยินดีต้อนรับ <?= htmlspecialchars($username); ?>! (<?= htmlspecialchars($role); ?>)</h2>

        <!-- Section สำหรับผู้ดูแลระบบ -->
        <?php if ($role == 'admin'): ?>
            <section>
                <h2>อัพโหลดเอกสารใหม่</h2>
                <form method="POST" enctype="multipart/form-data">
                    <label class="file-upload-label" for="file-upload">เลือกไฟล์:</label>
                    <input type="file" id="file-upload" name="file" required><br>
                    <button type="submit" class="upload-btn">อัพโหลด</button>
                </form>
            </section>

            <section>
                <h2>แสดงรายชื่อเอกสารทั้งหมด</h2>
                <?php foreach ($documents as $document): ?>
                    <p>
                        <?= htmlspecialchars($document['filename']); ?> - 
                        <a href="<?= htmlspecialchars($document['file_path']); ?>" target="_blank">ดาวน์โหลด</a>
                    </p>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>

        <!-- Section สำหรับผู้ใช้ทั่วไป -->
        <?php if ($role == 'user'): ?>
            <section>
                <h2>อัพโหลดเอกสารใหม่</h2>
                <form method="POST" enctype="multipart/form-data">
                    <label class="file-upload-label" for="file-upload">เลือกไฟล์:</label>
                    <input type="file" id="file-upload" name="file" required><br>
                    <button type="submit" class="upload-btn">อัพโหลด</button>
                </form>
            </section>
        <?php endif; ?>

        <br>
        <a class="logout-btn" href="../controller/logout.php">ออกจากระบบ</a>
    </div>
</body>
</html>
