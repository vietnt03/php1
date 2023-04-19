<?php
require_once "connection.php";
if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $file = $_FILES['image'];
    $image = $file['name'];
    if ($product_name =="") {
        $errors ['name'] = "không được để trống";
    }
    if ($price <0) {
        $errors ['price'] =  " số âm k dc";
    }
    if ($quantity < 0) {
        $errors ['quantity'] =  " số âm k dc";
    }
    if ($description =="") {
        $errors ['description'] = "không được để trống";
    }
    if (!isset($errors)) {
        $sql = "INSERT INTO products(product_name, image, price, quantity, description)
         VALUES('$product_name', '$image', $price, $quantity, '$description')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        move_uploaded_file($fide['tmp_name'],'img/'. $image);
        header("location:index.php");
        die;
    }

}
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
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">tên sản phẩm</label>
        <input type="text" name="product_name" value="<?= $products_name?? ''?>">
        <span>
            <?$errors['name'] ?? ''?>
        </span>
        <br>
        <label for="">giá</label>
        <input type="text" name="price" value="<?= $price?? ''?>">
        <span>
            <?$errors['price'] ?? ''?>
        </span>
        <br>
        <label for="">ảnh</label>
        <input type="file" name="image">


        <label for="">số lượng</label>
        <input type="text" name="quantity" value="<?= $quantity?? ''?>">
        <span>
            <?$errors['quantity'] ?? ''?>
        </span>
        <label for="">mô tả</label>
        <input type="text" name="description" value="<?= $description?? ''?>">
        <span>
            <?$errors['description'] ?? ''?>
        </span>
        <button type="submit">thêm</button>
    </form>
</body>
</html>