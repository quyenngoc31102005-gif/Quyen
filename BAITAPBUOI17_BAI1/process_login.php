<?php
session_start();

$valid_username = "admin";
$valid_password = "Admin@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if (empty($user) || empty($pass)) {
        die("Vui lòng không để trống tên đăng nhập hoặc mật khẩu. <a href='login.html'>Quay lại</a>");
    }

    if ($user === $valid_username && $pass === $valid_password) {
        $_SESSION['user_logged_in'] = $user;
        header("Location: success.php");
        exit();
    } else {
        die("Tên đăng nhập hoặc mật khẩu không chính xác. <a href='login.html'>Thử lại</a>");
    }
} else {
    header("Location: login.html");
    exit();
}