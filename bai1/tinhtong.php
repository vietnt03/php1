<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $tong = $number1 + $number2;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng 2 số</title>
</head>

<body>
    <form action="tinhtong.php" method="post">
        <label for="">Số thứ nhất</label>
        <input type="number" name="number1" value="<?= $number1 ?? '' ?>">
        <br>
        <label for="">Số thứ 2</label>
        <input type="number" name="number2">
        <br>
        <button type="submit">Tính tổng</button>
    </form>
    <?php
    //hàm isset dùng để kiểm tra sự tồn tại của 1 biến
    if (isset($tong)) {
        echo "$number1 + $number2 = $tong";
    }

    ?>

    <h2>
        <?php echo isset($tong) ? "$number1 + $number2 = $tong" : '' ?>
    </h2>
</body>

</html>