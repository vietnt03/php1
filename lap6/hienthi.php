<?php

require_once "db.php";
$sql =  "SELECT * FROM baiviet" ;
$stmt = $conn->prepare($sql);
$stmt ->execute();
$result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách</title>
</head>
<body>
<div class="menu">
        <a href="hienthi.php">Danh mục</a>
    </div>

    <table border="1">
        <tr>
            <th>mabv</th>
            <th>tiêu đề</th>
            <th>image</th>
            <th>mô tả </th>
            <th>Nội Dung</th>
            <th>Lượt Xem </th>
            <th>mã chuyên mục</th>
            <th>ngày đăng </th>
            <th>
                <a href="add.php">Thêm mới</a>
            </th>
        </tr>
        <?php foreach ($result as $cate) :?>

            <tr>
                <td><?=$cate['mabv']?></td>
                <td><?=$cate ['tieude']?></td>
                <td><?=$cate ['anh']?></td>

                <td><?=$cate ['mota']?></td>
                <td><?=$cate ['noidung']?></td>
                <td><?=$cate ['luotxem']?></td>
                <td><?=$cate ['macm']?></td>
                <td><?=$cate ['ngaydang']?></td>
                <td>
                <a href="edit.php?id=<?= $cate['mabv']?>">Sửa</a>
                <a href="del.php?id=<?= $cate['mabv'] ?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
            </td>
            </tr>
        <?php endforeach ?>

    </table>
</body>
</html>