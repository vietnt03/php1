<?php
    require_once "connection.php";
  
    $sql = "Select * From Categories";
  
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
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <div class="menu">
        <a href="categories.php">Danh mục</a>
    </div>
    
    <table border="1">
        <tr>
            <th>$ID</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>
                <a href="add_categories.php">Thêm mới</a>
            </th>
        </tr>
        <!--hiển thị danh sách danh mục từ database-->
        <?php
        foreach($result as $cate): ?>
        <tr>
            <td><?= $cate['id'] ?></td>
            <td><?= $cate['cate_name'] ?></td>
            <td><?= $cate['description'] ?></td>
            <td>
                <!-- edit | del -->
                <a href="edit_categories.php?id=<?= $cate['id']?>">Sửa</a>
                <a href="del_categories.php?id=<?= $cate['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
            </td>

        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
