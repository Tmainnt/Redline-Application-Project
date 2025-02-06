<?php
include 'db.php';

$email = $_POST['user_email'];
$name = $_POST['user_name'];
$pass = $_POST['user_pass'];

$checkEmailStmt = $conn->prepare("SELECT COUNT(*) FROM `user` WHERE `user_email` = ?");
$checkEmailStmt->bind_param("s", $email);
$checkEmailStmt->execute();
$checkEmailStmt->bind_result($emailCount);
$checkEmailStmt->fetch();
$checkEmailStmt->close();

if ($emailCount > 0) {
    echo "อีเมลนี้ถูกใช้งานแล้ว";
    header("Location: form_regis.php");
} else {
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO `user` (`user_email`, `user_name`, `user_pass`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $name, $hashedPass);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();
