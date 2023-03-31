<?php
require_once "db.php";
$sql = "select * from user";
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
    <title>danh sach user</title>
</head>
<body>
    <div class="danh_sach">
        <a href="user.php"> danh sách</a>
    </div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>password</th>
            <th>fullname</th>
            <th>birthday</th>
            <th>email</th>
            <th>
                <a href="add_user.php">thêm mới</a>
            </th>
        </tr>
        <?php
        foreach ($result as $cate) : ?>
        <tr>
            <td><?= $cate ['id']?></td>
            <td><?= $cate ['username']?></td>
            <td><?= $cate ['password']?></td>
            <td><?= $cate ['fullname']?></td>
            <td><?= $cate ['birthday']?></td>
            <td><?= $cate ['email']?></td>
            <td>
                
                <a href="edit_user.php?id=<?= $cate['id']?>">Sửa</a>
                <a href="dell_user.php?id=<?= $cate['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
            </td>
        </tr>
        
        <?php endforeach ?>

    </table>
</body>
</html>