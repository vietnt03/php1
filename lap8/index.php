<?php
include "db.php";

$sql = "Select * From sinhvien";

$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách sv</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>hoten</td>
            <td>anh</td>
            <td>ngaysinh</td>
            <td>quequan</td>
            <td>email</td>
            <td>dienthoai</td>
            <td>manh</td>
          
            <th>
                <a href="add.php">Thêm mới</a>
            </th>
            
        </tr>

        <?php
        foreach ($result as $cate):?>
        <tr>
            <td><?= $cate['id'] ?></td>
            <td><?= $cate['hoten'] ?></td>
            <td><img src="<?= $cate ['anh']?>" alt=""></td>
            <td><?= $cate['ngaysinh'] ?></td>
            <td><?= $cate['quequan'] ?></td>
            <td><?= $cate['email'] ?></td>
            <td><?= $cate['dienthoai'] ?></td>
            <td><?= $cate['manh'] ?></td>
            <td>
                <!-- edit | del -->
                <a href="edit.php?id=<?= $cate['id']?>">Sửa</a>
                <a href="del.php?id=<?= $cate['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
            </td>
        </tr>
         


        <?php endforeach ?>






    </table>
</body>

</html>