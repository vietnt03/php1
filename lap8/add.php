<?php
include "db.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $hoten = $_POST['hoten'];
    $anh = $_FILES['anh'];
    $ngaysinh = $_POST['ngaysinh'];
    $quequan = $_POST['quequan'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $manh = $_POST['manh'];
    $error = [];
    $anh_image = '';
    if(empty($hoten)){
        $error ['$hoten_e'] = "bạn chưa nhập họ tên";
    }
    if(empty($ngaysinh)){
        $error ['$ngaysinh_e'] = "bạn chưa nhập ngày sinh";
    }
    if(empty($quequan)){
        $error ['$quequan_e'] = "bạn chưa nhập quê quán";
    }
    if(empty($email)){
        $error ['$email_e'] = "bạn chưa nhập email";
    }
    if(empty($dienthoai)){
        $error ['$dienthoai_e'] = "bạn chưa nhập số điện thoại";
    }
    if(empty($manh)){
        $error ['$manh_e'] = "bạn chưa nhập số mã môn học";
    }
    if(!$error){
        $file_dir = './uploat';
        $anh_image = $file_dir . basename($_FILES['anh']['name']);
        $all = true;
        $filetype = pathinfo($anh_image, PATHINFO_EXTENSION);
        $type = ['jpg', 'png', 'jpeg', 'gif', ""];
        
        if (!in_array($filetype, $type)) {
            echo "File ảnh không hợp lệ";
            exit();
        }

        if (move_uploaded_file($_FILES['anh']['tmp_name'], $anh_image)) {
            // echo "Upload ảnh thành công tại" . " " . $avatars . "<br>";
        }

        $sql = "INSERT INTO sinhvien VALUES(null, '$hoten', '$anh_image', '$ngaysinh','$quequan','$dienthoai', '$email','$manh')";
        $result = $conn->exec($sql);
        header("location:index.php");
    }
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
    <h1> thêm sinh viên </h1>
    <a href="./index.php">về trang danh sách</a>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">
            <span>họ tên </span>
            <input type="text" name="hoten">
        </label> <br>
        <?php echo isset($erorr['hoten_e']) ? $erorr['hoten_e'] : "" ?>
        <label for="">
            <span>ảnh đại điện </span>
            <input type="file" name="anh" value="">
            <br>
        </label>
        
        <label for="">
            <span>ngay sinh</span>
            <input type="date" name="ngaysinh" value="">
            <br>
        </label>
        <?php echo isset($erorr['ngaysinh_e']) ? $erorr['ngaysinh_e'] : "" ?>
        <label for="">
            <span>que uan</span>
            <input type="text" name="quequan" value="">
            <br>
        </label>
        <?php echo isset($erorr['quequan_e']) ? $erorr['quequan_e'] : "" ?>
        <label for="">
            <span>email</span>
            <input type="text" name="email" value="">
            <br>
        </label>
        <?php echo isset($erorr['email_e']) ? $erorr['email_e'] : "" ?>
        <label for="">
            <span>dien thoai</span>
            <input type="text" name="dienthoai" value="">
            <br>
        </label>
        <?php echo isset($erorr['dienthoai_e']) ? $erorr['dienthoai_e'] : "" ?>
        
        <label for="">
            <span>ma ngành học</span>
            <input type="text" name="manh" value="">
            <br>
        </label>
        <?php echo isset($erorr['manh_e']) ? $erorr['manh_e'] : "" ?>
        <button type="submit">thêm</button>
    </form>
</body>
</html>