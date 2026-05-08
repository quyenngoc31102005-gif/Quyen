<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>bai5_kiemtra_form</title>
</head>
<body>

    <form action="" method="POST">
        Họ tên: <input type="text" name="ho_ten"><br><br>
        Số điện thoại: <input type="text" name="so_dien_thoai"><br><br>
        Email: <input type="text" name="email"><br><br>
        Điểm đến: 
        <select name="diem_den">
            <option value="">--Chọn điểm đến--</option>
            <option value="Ha Noi">Hà Nội</option>
            <option value="Da Nang">Đà Nẵng</option>
            <option value="Phu Quoc">Phú Quốc</option>
        </select><br><br>
        Số người: <input type="text" name="so_nguoi"><br><br>
        <button type="submit" name="check">Đặt tour</button>
    </form>

    <?php
    if (isset($_POST['check'])) {
        $ho_ten = $_POST['ho_ten'];
        $sdt = $_POST['so_dien_thoai'];
        $email = $_POST['email'];
        $diem_den = $_POST['diem_den'];
        $so_nguoi = $_POST['so_nguoi'];

        $loi = "";

        if (empty($ho_ten)) {
            $loi .= "Họ tên không được rỗng.<br>";
        }
        if (empty($sdt)) {
            $loi .= "Số điện thoại không được rỗng.<br>";
        }
        if (empty($email)) {
            $loi .= "Email không được rỗng.<br>";
        }
        if (empty($diem_den)) {
            $loi .= "Phải chọn điểm đến.<br>";
        }
        if (!is_numeric($so_nguoi) || $so_nguoi <= 0) {
            $loi .= "Số người phải là số và lớn hơn 0.<br>";
        }

        if ($loi != "") {
            echo "<p style='color:red;'>$loi</p>";
        } else {
            echo "<p style='color:green;'>Đặt tour thành công!</p>";
        }
    }
    ?>

</body>
</html>