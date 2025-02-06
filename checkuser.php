<?php
include 'db.php';

$email = $_POST['user_email'];
$password = $_POST['user_pass'];

$stmt = $conn->prepare("SELECT `user_pass` FROM `user` WHERE `user_email` = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($hashedPass);
$stmt->fetch();
$stmt->close();

if ($hashedPass) {
    if (password_verify($password, $hashedPass)) {
        echo "Login successful";
        /*header("Location: index.php");*/
    } else {
        echo "Password ของท่านไม่ถูกต้อง";
    }
} else {
    echo "ไม่มีชื่อผู้ใช้งาน";
}

$conn->close();
