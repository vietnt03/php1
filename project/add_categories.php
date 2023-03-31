<?php
require_once "connection.php";
if ($_SERVER[ 'REQUEST_METHOD'] == 'POST') {
    $cate_name = $_POST['cate_name'];
    $description = $_POST['description'];
    //Viết câu lệnh SQL insert
    $sql = "INSERT INTO categories(cate_name, description) VALUES ('$cate_name', '$description')";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    $stmt->execute();
    //Di chuyển sang trang categories.php
    header ("location: categories.php");
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
        <a href="categories.php">Danh mục</a>
    </div>

    <form action="add_categories.php" method="post">
        <input type="text" name="cate_name" placeholder="Tên danh mục">
        <br>
        <textarea name="description" placeholder="Mô tả" cols="100"
        rows="10"></textarea>
        <br>
        <button type="submit">thêm</button>
    </form>
    </body>
    </html>