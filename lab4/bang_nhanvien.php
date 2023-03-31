<?php
    require_once "connection.php";
    //Câu lệnh SQl để lấy danh sách danh mục
    $sql = "SELECT manv,tennv,phai,ngaysinh,luong,tenphg FROM nhanvien JOIN phongban on nhanvien.maphg = phongban.maphg;";
    // Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    $stmt->execute();
    //Lấy dữ liệu (toàn bộ)
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
</head>
<body>
    <div class="menu">
        <a href="bang_nhanvien.php">Danh mục</a>
    </div>
    <table border="1">
        <tr>
            <th>Mã nhân viên</th>
            <th>Tên nhân viên</th>
            <th>Phái</th>
            <th>Ngày sinh</th>
            <th>Lương</th>
            <th>Tên phòng</th>
            <th>
                <a href="add_nhanvien.php">Thêm mới</a>
            </th>
        </tr>
        <!--hiển thị danh sách danh mục từ database-->
        <?php
        foreach($result as $cate): ?>
        <tr>
            <td><?= $cate['manv'] ?></td>
            <td><?= $cate['tennv'] ?></td>
            <td><?= $cate['phai'] ?></td>
            <td><?= $cate['ngaysinh'] ?></td>
            <td><?= $cate['luong'] ?></td>
            <td><?= $cate['tenphg'] ?></td>
            <td>
                edit | del
            </td>

        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
