<?php 
include '../controller/db.php';

$sql = "SELECT filename, uploaded_at FROM documents ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Time</title>
  <link rel="stylesheet" href="../asset/style.css">
</head>
<body>
  <HEADer>
                <a href="dashboard.php">ผู้ใช้</a>
                <a href="upload.php">อัพโหลดไฟล์</a>
                <a href="uploadtime.php">เวลาการอัพโหลด</a>
            </nav>
  </HEADer>
  <h1>File upload Time</h1>
  <table>
    <thead>
      <tr>ชื่อไฟล์</tr>
      <th>เวลาการอัพโหลด</th>
    </thead>
    <tbody>
    <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($row["filename"]) . "</td>";
          echo "<td>" . htmlspecialchars($row["uploaded_at"]) . "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='2'>ไม่พบข้อมูลการอัพโหลด</td></tr>";
      }
      ?>
    </tbody>
  </table>
  
</body>
</html>