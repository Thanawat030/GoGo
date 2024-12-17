<?php
include 'controller/documentController.php';

$documents = fetchDocuments($conn);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>เอกสารที่สามารถดาวน์โหลดได้</title>
</head>
<body>
    <div class="container">
        <h2>เอกสารที่สามารถดาวน์โหลดได้</h2>
        <a href='public/login.php'>เข้าสู่ระบบ</a>
        <ul>
            <?php foreach ($documents as $document): ?>
                <div class="container">
                    <li>
                        ชื่อไฟล์: <a href="<?= $document['file_path']; ?>"><?= $document['filename']; ?></a>
                    </li>
                </div>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
