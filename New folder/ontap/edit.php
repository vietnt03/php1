<?php
require_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    $id = $_POST['id'];
    //lấy dữ liệu file
    $file = $_FILES['image'];
    //lấy ra tên ảnh lưu vào data
    $image = $_POST['image'];

    //Validate
    if ($product_name == "") {
        $errors['name'] = "Tên sản phẩm không được trống";
    }
    if ($price < 0) {
        $errors['price'] = "Giá không được âm";
    }
    if ($quantity < 0) {
        $errors['quantity'] = "Số lượng không được âm";
    }


    //Nếu không có lỗi xảy ra mới thêm dữ liệu và database
    if (!isset($errors)) {
        $sql = "UPDATE products SET product_name='$product_name', image='$image', price=$price, quantity=$quantity, description='$description' WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //Upload ảnh
        move_uploaded_file($file['tmp_name'], 'img/' . $image);
        //THông báo thành công
        $msg = "Thêm dữ liệu thành công";
        header("location: index.php?msg=$msg");
        die;
    }
}


//Lây id của sản phẩm cần cập nhật
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
//Lấy 1 bản ghi
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="product_name" value="<?= $product['product_name'] ?>">
        <span style="color:red">
            <?= $errors['name'] ?? '' ?>
        </span>
        <br>
        <label for="">Giá</label>
        <input type="number" name="price" value="<?= $product['price'] ?>">
        <span style="color:red">
            <?= $errors['price'] ?? '' ?>
        </span>
        <br>
        <label for="">Hình</label>
        <img src="img/<?= $product['image'] ?>" width="100" alt=""><br>
        <input type="hidden" name="image" value="<?= $product['image'] ?>">
        <input type="file" name="image" id="">
        <span style="color:red">
            <?= $errors['image'] ?? '' ?>
        </span>
        <br>
        <label for="">Số lượng</label>
        <input type="number" name="quantity" value="<?= $product['quantity'] ?>">
        <span style="color:red">
            <?= $errors['quantity'] ?? '' ?>
        </span>
        <br>
        <label for="">Mô tả</label>
        <textarea name="description" cols="100" rows="5"><?= $product['description'] ?></textarea>

        <br>

      

        <!--Lưu lại thông tin id cần cập nhật-->
        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <br>
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>