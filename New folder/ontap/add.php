<?php
require_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $cate_id = $_POST['cate_id'];

    //lấy dữ liệu file
    $file = $_FILES['image'];
    //lấy ra tên ảnh lưu vào data
    $image = $file['name'];

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
    //validate hình
    if ($file['size'] <= 0) {
        $errors['image'] = "Bạn chưa nhập ảnh";
    } else {
        $img = ['jpg', 'png', 'gif'];
        //Lấy phần mở rộng của file
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if (!in_array($ext, $img)) {
            $errors['image'] = "File của bạn không phải là hình";
        }
    }

    //Nếu không có lỗi xảy ra mới thêm dữ liệu và database
    if (!isset($errors)) {
        $sql = "INSERT INTO products(product_name, image, price, quantity, description, cate_id) VALUES('$product_name', '$image', $price, $quantity, '$description', $cate_id)";
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

//Lấy toàn bộ dữ liệu trong bảng categories
$sql = "SELECT * FROM categories";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi
$stmt->execute();
//lấy dữ liệu
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        <input type="text" name="product_name" value="<?= $product_name ?? '' ?>">
        <span style="color:red">
            <?= $errors['name'] ?? '' ?>
        </span>
        <br>
        <label for="">Giá</label>
        <input type="number" name="price" value="<?= $price ?? '' ?>">
        <span style="color:red">
            <?= $errors['price'] ?? '' ?>
        </span>
        <br>
        <label for="">Hình</label>
        <input type="file" name="image" id="">
        <span style="color:red">
            <?= $errors['image'] ?? '' ?>
        </span>
        <br>
        <label for="">Số lượng</label>
        <input type="number" name="quantity" value="<?= $quantity ?? '' ?>">
        <span style="color:red">
            <?= $errors['quantity'] ?? '' ?>
        </span>
        <br>
        <label for="">Mô tả</label>
        <textarea name="description" cols="100" rows="5"><?= $description ?? '' ?></textarea>

        <br>
        <label for="">Danh mục</label>
        <select name="cate_id" id="">
            <?php foreach ($categories as $cate) : ?>
                <option value="<?= $cate['id'] ?>">
                    <?= $cate['cate_name'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <br>
        <button type="submit">Thêm</button>
    </form>
</body>

</html>