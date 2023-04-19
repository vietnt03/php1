<?php
    require_once ("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $file = $_FILES['image'];
    $image = $file['name'];
    if ($name =="") {
        $err ['name'] = "k được trống";
    }
    if ($price <0 || $price =="") {
        $err ['price'] = "không được số âm và k được để trống";
    }
    if(!isset($err)){
        
        $sql = "INSERT INTO products (name, price, image) values('$name','$price','$image')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        move_uploaded_file($file['tmp_name'],'img/'  .$image);
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
        <label for="">tên</label>
        <input type="text" name="name" value="<?=$name ??''?>">
        <span>
            <?=$err ['name'] ??''?>
        </span>
        <br>
        <label for=""> ảnh</label>
        <input type="file" name="image">
        <br>
        <label for="">giá</label>
        <input type="number" name="price" value="<?=$price ??''?>">
        <span>
            <?=$err ['price'] ??''?>
        </span>
        <br>
        <button type="submit">thêm</button>
    </form>
</body>
</html>