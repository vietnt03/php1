<?php
require_once ("db.php");
$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
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
            <th>name</th>
            <th>ảnh</th>
            <th>giá</th>
            <th>
                <a href="add.php">thêm</a>
            </th>
        </tr>
        <?php foreach ($products as $pro) :?>
            <tr>
                <td><?= $pro['id']?></td>
                <td><?= $pro['name']?></td>
                <td>
                    <img src="img/<?=$pro['image'] ?>" width="100" alt="">
                </td>
                <td><?= $pro['price']?></td>
                <td>
                    <a href="edit.php?id=<?=$pro['id']?>">sửa</a>
                    <a href="del.php?id=<?=$pro['id']?>" onclick="return confirm('xóa')">xóa</a>

                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>