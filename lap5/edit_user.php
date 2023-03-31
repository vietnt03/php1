<?php
require_once "db.php";
if ($_SERVER[ 'REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $sql = "UPDATE user SET username= '$username', fullname='$fullname',
    password= '$password',fullname= '$fullname',birthday= '$birthday',email= '$email' WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header ("location: user.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id= $id";
$stmt =$conn ->prepare($sql);
$stmt ->execute();
$cate  = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <a href="user.php">Danh mục</a>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $cate['id']?>">
        <input type="text" name="username" placeholder="username" value="<?= $cate['username'] ?>" required>
        <br>
        <input type="text" name="password" placeholder="password"value="<?= $cate['password'] ?>"required>
        <br>
        <input type="text" name="fullname" placeholder="fullname"value="<?= $cate['fullname'] ?>"required>
        <br>
        <input type="date" name="birthday" placeholder=" birthday"value="<?= $cate['birthday'] ?>"required>
        <br>
        <input type="text" name="email" placeholder="email" value="<?= $cate['email'] ?>">
        <br>
        <button type="submit">Cập nhật</button>
    </form>
    </body>
    </html>