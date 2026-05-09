<?php
session_start();

if (!isset($_SESSION['user_logged_in'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thành công</title>
</head>
<body>
    <h1>Chào mừng, <?php echo htmlspecialchars($_SESSION['user_logged_in']); ?>!</h1>
    <p>Bạn đã đăng nhập thành công vào hệ thống.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>