


 <?php
require_once("db.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];    
    $email = $_POST['email'];
    $sql = "INSERT INTO user(username,password,fullname,birthday,email) VALUES ('$username','$password','$fullname','$birthday','$email')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location: user.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm mới user</title>
</head>
<body>
    <div class="danh sách user">
         <a href="user.php">Danh sách user</a>
    </div>
    <form method="POST" action="add_user.php">
        <input type="text" name="username" placeholder="tên user" required>
        <br>
        <input type="password" name="password" placeholder="mật khẩu"required>
        <br>
        <input type="text" name="fullname" placeholder="tên đầy đủ user"required>
        <br>
        <input type="date" name="birthday" placeholder="ngày sinh"required>
        <br>
        <input type="text" name="email" placeholder="email" required>
        <br>
        <button type="submit">thêm</button>

    </form>
</body>
</html>
