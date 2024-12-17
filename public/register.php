<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="../asset/style.css">
</head>
<body>
    <h2>สมัครสมาชิก</h2>
    <form method="POST" action="../controller/register.php">
        <label for="username">ชื่อผู้ใช้:</label>
        <input type="text" name="username" required><br>

        <label for="password">รหัสผ่าน:</label>
        <input type="password" name="password" required><br>

        <label for="email">อีเมล:</label>
        <input type="email" name="email" required><br>

        <button type="submit">สมัครสมาชิก</button>
    </form>
</body>
</html>
