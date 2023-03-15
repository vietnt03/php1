<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $luong = $_POST['luong'];
        $thue = 0;
        
        if ($luong >= 20 && $luong < 30) {
            $thue = $luong * 0.1;
        } elseif ($luong >= 30 && $luong < 40) {
            $thue = $luong * 0.125;
        } elseif ($luong >= 40 && $luong < 50) {
            $thue = $luong * 0.15;
        } elseif ($luong >= 50) {
            $thue = $luong * 0.2;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tính thuế thu nhập cá nhân</title>
</head>
<body>
    <h1>Tính thuế thu nhập cá nhân</h1>
    <form method="post" action="">
        <label for="luong">Thu nhập của bạn (triệu đồng):</label>
        <input type="number" min="0" step="0.1" name="luong" id="luong" required>
        <button type="submit">Tính toán</button>
    </form>
    <table>
        <tr>
            <th>Thu nhập</th>
            <th>Số tiền phải nộp thuế</th>
        </tr>
        <tr>
            <td><?php echo ($luong) ?> triệu đồng</td>
            <td><?php echo ($thue) ?> triệu đồng</td>
        </tr>
    </table>
</body>
</html>
