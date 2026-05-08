<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>bai4_form_coban</title>
</head>
<body>

    <form action="" method="POST">
        Họ tên: <input type="text" name="ho_ten" required><br><br>
        Điểm đến: <input type="text" name="diem_den" required><br><br>
        Số người: <input type="number" name="so_nguoi" required><br><br>
        <button type="submit" name="submit">Đặt tour</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $ho_ten = $_POST['ho_ten'];
        $diem_den = $_POST['diem_den'];
        $so_nguoi = $_POST['so_nguoi'];

        echo "<h3>Kết quả:</h3>";
        echo "Họ tên khách hàng: " . $ho_ten . "<br>";
        echo "Điểm đến: " . $diem_den . "<br>";
        echo "Số người: " . $so_nguoi;
    }
    ?>

</body>
</html>