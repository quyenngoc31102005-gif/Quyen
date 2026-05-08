<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>bai6_danhsach_tour</title>
</head>
<body>

    <h2>Danh sách Tour hiện có</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Mã tour</th>
            <th>Tên tour</th>
            <th>Điểm đến</th>
            <th>Giá tour</th>
            <th>Số ngày</th>
        </tr>
        <?php
        $tours = [
            ["ma" => "T01", "ten" => "Tour Biển", "diem_den" => "Nha Trang", "gia" => 2000000, "ngay" => 3],
            ["ma" => "T02", "ten" => "Tour Núi", "diem_den" => "Sapa", "gia" => 3500000, "ngay" => 4],
            ["ma" => "T03", "ten" => "Tour Di Sản", "diem_den" => "Huế", "gia" => 1500000, "ngay" => 2],
            ["ma" => "T04", "ten" => "Tour Đảo", "diem_den" => "Phú Quốc", "gia" => 5000000, "ngay" => 5]
        ];

        foreach ($tours as $t) {
            echo "<tr>";
            echo "<td>{$t['ma']}</td>";
            echo "<td>{$t['ten']}</td>";
            echo "<td>{$t['diem_den']}</td>";
            echo "<td>" . number_format($t['gia']) . " VNĐ</td>";
            echo "<td>{$t['ngay']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Đặt Tour</h2>
    <form action="" method="POST">
        Họ tên: <input type="text" name="ho_ten"><br><br>
        Chọn mã tour: 
        <select name="ma_tour">
            <option value="">--Chọn mã--</option>
            <?php
            foreach ($tours as $t) {
                echo "<option value='{$t['ma']}'>{$t['ma']} - {$t['ten']}</option>";
            }
            ?>
        </select><br><br>
        Số người: <input type="number" name="so_nguoi"><br><br>
        <button type="submit" name="submit">Đặt tour</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $ho_ten = $_POST['ho_ten'];
        $ma_tour = $_POST['ma_tour'];
        $so_nguoi = $_POST['so_nguoi'];
        $loi = "";
        $tour_tim_thay = null;

        if (empty($ho_ten)) {
            $loi .= "Họ tên không được rỗng.<br>";
        }
        
        if (empty($ma_tour)) {
            $loi .= "Chưa chọn mã tour.<br>";
        } else {
            foreach ($tours as $t) {
                if ($t['ma'] == $ma_tour) {
                    $tour_tim_thay = $t;
                    break;
                }
            }
        }

        if ($so_nguoi <= 0) {
            $loi .= "Số người phải lớn hơn 0.<br>";
        }

        if ($loi != "") {
            echo "<p style='color:red;'>$loi</p>";
        } elseif ($tour_tim_thay) {
            $tong_tien = $tour_tim_thay['gia'] * $so_nguoi;
            echo "<h3>Thông tin đặt tour thành công:</h3>";
            echo "Khách hàng: $ho_ten<br>";
            echo "Tour: " . $tour_tim_thay['ten'] . " (" . $tour_tim_thay['diem_den'] . ")<br>";
            echo "Số người: $so_nguoi<br>";
            echo "Tổng tiền thanh toán: " . number_format($tong_tien) . " VNĐ";
        }
    }
    ?>

</body>
</html>