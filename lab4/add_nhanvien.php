<?php
require_once "connection.php";
if ($_SERVER[ 'REQUEST_METHOD'] == 'POST') {
    $tennv = $_POST['tennv'];
    $phai = $_POST['phai'];
    $ngaysinh = $_POST['ngaysinh'];
    $luong = $_POST['luong'];
    $maphg = $_POST['maphg'];
    $tenphg = $_POST['tenphg'];
    //Viết câu lệnh SQL insert
    $sql = "INSERT INTO nhanvien (tennv, ngaysinh, phai, luong,maphg)VALUES('$tennv','$ngaysinh','$phai','$luong','$maphg');
            INSERT INTO phongban (tenphg)VALUES('$tenphg');";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    $stmt->execute();
    //Di chuyển sang trang categories.php
    header ("location: bang_nhanvien.php");
    exit;
}
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm mới danh mục</title>
    </head>
    <body>
        <div class="menu">
        <a href="bang_nhanvien">Danh mục</a>
    </div>

    <form action="add_nhanvien.php" method="post">
        <input type="text" name="tennv" placeholder="Tên Nhân Viên">
        <br>
        <select name="phai" id="">
            <option value="">Nam</option>
            <option value="">Nữ</option>
            <option value="">giới tính khác</option>
        </select>
        <br>
        <input type="date" name="ngaysinh" placeholder="Ngày Sinh">
        <br>
        <input type="text" name="luong" placeholder="lương">
        <br>
        <input type="text" name="maphg" placeholder="mã phòng ban">
        <br>
        <input type="text" name="tenphg" placeholder="tên phòng ban">
        <br>
        <button type="submit">thêm</button>
    </form>
    </body>
    </html>