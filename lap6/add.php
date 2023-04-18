<?php
require_once "db.php";
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $tieude = $_POST ['tieude'];
    $anh = $_POST ['anh'];
    $mota = $_POST ['mota'];
    $noidung = $_POST ['noidung'];
    $luotxem = $_POST ['luotxem'];
    $macm = $_POST ['macm'];

    $ngaydang = $_POST ['ngaydang'];
    

    
    $sql = "INSERT INTO baiviet(tieude,anh,mota,noidung,luotxem,macm,ngaydang) VALUES ('$tieude','$anh','$mota','$noidung','$luotxem','$macm','$ngaydang')";
    $stmt=  $conn->prepare($sql);
    $stmt -> execute();
    header("location: hienthi.php");
    exit;



}

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
<body>
    <div class="menu">
        <a href="hienthi.php">Danh mục</a>
    </div>
    <form action="add.php" method="POSt" enctype="multipart/form-data">
        <input type="text" name="tieude" placeholder="tiêu đề">
        <br>
        <input type="file" name="anh">
        <br>
        <input type="text" name="mota" placeholder="tiêu đề">
        <br>
        <input type="text" name="noidung" placeholder="nội dung">
        <br>
        <input type="text" name="luotxem" placeholder="lượt xem">
        <br>
        <input type="text" name="macm" placeholder="mã chuyên mục">
        <br>
        <input type="date" name="ngaydang" placeholder="date">
        <br>
        <button type="submit">thêm</button>








    </form>


</body>
</html>