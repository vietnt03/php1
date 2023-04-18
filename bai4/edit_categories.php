<?php
require_once "connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cate_name = $_POST['cate_name'];
    $description = $_POST['description'];
    $id = $_POST['id'];
    //Viết câu lệnh SQL UPDATE
    $sql = "UPDATE categories SET cate_name='$cate_name', description='$description' WHERE id=$id";

    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    $stmt->execute();
    //Di chuyển sang trang categories.php
    header("location: categories.php");
    exit;
}
//Lấy thông tin id
$id = $_GET['id'];
//Câu lệnh SQL lấy thông tin dữ liệu cần sửa
$sql = "SELECT * FROM categories WHERE id=$id";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi
$stmt->execute();
//Lấy dữ liệu
$cate = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật danh mục</title>
</head>

<body>
    <div class="menu">
        <a href="categories.php">Danh mục</a>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $cate['id'] ?>">
        <input type="text" name="cate_name" placeholder="Tên danh mục" value="<?= $cate['cate_name'] ?>">
        <br>
        <textarea name="description" placeholder="Mô tả" cols="100" rows="10"><?= $cate['description'] ?></textarea>
        <br>
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>