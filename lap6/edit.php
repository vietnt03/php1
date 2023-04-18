<?php
require_once ("db.php");
if($_SERVER ['REQUEST_METHOD'] === 'POST'){
    $tieude = $_POST ['tieude'];
    $anh = $_POST ['anh'];
    $mota = $_POST ['mota'];
    $noidung = $_POST ['noidung'];
    $luotxem = $_POST ['luotxem'];
    $macm = $_POST ['macm'];
    $mabv = $_POST['mabv'];

    $ngaydang = $_POST ['ngaydang'];
    $sql = "UPDATE baiviet SET tieude= '$tieude', anh='$anh',mota ='$mota', noidung= '$noidung',$luotxem ='$luotxem', macm ='$macm' WHERE mabv=$mabv";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header ("location: hienthi.php");
    exit;
}
$id = $_GET['id'];
$sql = "SELECT * FROM baiviet WHERE mabv= $id";
$stmt =$conn ->prepare($sql);
$stmt ->execute();
$cate  = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POSt"value="<?= $cate['id']?>" >
        <input type="text" name="tieude" placeholder="tiêu đề" value="<?= $cate['tieude'] ?>">
        <br>
        <input type="file" name="anh" value="<?= $cate['anh'] ?>">
        <br>
        <input type="text" name="mota" placeholder="tiêu đề"value="<?= $cate['mota'] ?>">
        <br>
        <input type="text" name="noidung" placeholder="nội dung" value="<?= $cate['noidung'] ?>">
        <br>
        <input type="text" name="luotxem" placeholder="lượt xem"value="<?= $cate['luotxem'] ?>">
        <br>
        <input type="text" name="macm" placeholder="mã chuyên mục"value="<?= $cate['macm'] ?>">
        <br>
        <input type="date" name="ngaydang" placeholder="date"value="<?= $cate['ngaydang'] ?>">
        <br>
        <button type="submit">thêm</button>








    </form>

</body>
</html>