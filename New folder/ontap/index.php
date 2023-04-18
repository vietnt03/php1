<?php
require_once "connection.php";
$sql = "SELECT * FROM products";
$stmt =$conn->prepare($sql);
$sql = $stmt->execute();
$products = $stmt->fetchAll(PDO :: FETCH_ASSOC);


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
    <table border="1">
        <tr>
            <th>id</th>
            <th>tên </th>
            <th>ảnh</th>
            <th>giá</th>
            <th>số lượng</th>
            <th>mô tả</th>
            <th>
                <a href="abc.php">thêm</a>
            </th>
        </tr>
        <?php foreach ($products as $pro) : ?>
            <tr>
                <td><?= $pro['id'] ?></td>
                <td><?= $pro['product_name'] ?></td>
                <td>
                    <img src="img/<?= $pro['image'] ?>" width="100" alt="">
                </td>
                <td><?= $pro['price'] ?></td>
                <td><?= $pro['quantity'] ?></td>
                <td><?= $pro['description'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $pro['id'] ?>">Sửa</a>
                    <a href="delete.php?id=<?= $pro['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>