
<?php
require_once "db.php";
if($_SERVER[ 'REQUEST_METHOD'] == 'POST'){
    $hoten = $_POST ['hoten'];
    $ngaysinh = $_POST ['ngaysinh'];
    $quequan = $_POST ['quequan'];
    $email = $_POST ['email'];
    $anh = $_POST ['anh'];
    $dienthoai = $_POST ['dienthoai'];
    $manh = $_POST ['manh'];
    $id = $_POST['id'];
    $sql = "UPDATE sinhvien SET hoten= '$hoten', ngaysinh='$ngaysinh',quequan ='$quequan', email= '$email',dienthoai ='$dienthoai', manh ='$manh' WHERE id=$id";


    $stmt = $conn->prepare($sql);

    $stmt->execute();

    header ("location: index.php");
    exit;


}
$id = $_GET['id'];
$sql = "SELECT * FROM sinhvien WHERE id= $id";
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
    <h1> thêm sinh viên </h1>
    <a href="index.php">về trang danh sách</a>
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $cate['id']?>">
        <label for="">
            <span>họ tên </span>
            <input type="text" name="hoten" value="<?= $cate['hoten'] ?>">
        </label> <br>
      
        
        
        <label for="">
            <span>ngay sinh</span>
            <input type="date" name="ngaysinh" value="<?= $cate['ngaysinh'] ?>">
            <br>
        </label>
        
        <label for="">
            <span>que uan</span>
            <input type="text" name="quequan" value="<?= $cate['quequan'] ?>">
            <br>
        </label>
        
        <label for="">
            <span>email</span>
            <input type="text" name="email" value="<?= $cate['email'] ?>">
            <br>
        </label>
     
        <label for="">
            <span>dien thoai</span>
            <input type="text" name="dienthoai" value="<?= $cate['dienthoai'] ?>">
            <br>
        </label>
 
        
        <label for="">
            <span>ma ngành học</span>
            <input type="text" name="manh" value="<?= $cate['manh'] ?>">
            <br>
        </label>

        <button type="submit">sửa</button>
    </form>
</body>
</html>