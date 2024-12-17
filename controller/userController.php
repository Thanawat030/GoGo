<?php
session_start();


if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header('Location: login.php');
    exit();
}

include 'db.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);


$users = [];
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}
?>