<?php
include '../controller/login.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../asset/style.css">
</head>
<body>
  <h1>
    Login Page

  </h1>
  <div>
  <form method="POST" action="login.php">
    ชื่อผู้ใช้: <input type="text" name="username" required><br>
    รหัสผ่าน: <input type="password" name="password" required><br>
    <button type="submit">เข้าสู่ระบบ</button>
</form>
    <a href="register.php">register</a>

  </div>
  
</body>
</html>