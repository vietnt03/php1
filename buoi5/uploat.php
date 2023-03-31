<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $files = $_FILES['files_uploaded'];
    $files_name = $files['name'];
    $img = ['jpg', 'png'];
    if($files['size'] > 0){
        $ext = pathinfo($files_name, PATHINFO_EXTENSION);
        if(!in_array($ext, $img)){
            $files_err = "File này không phải là hình ảnh";
        }
        if($files['size'] > 1000000){
            $files_err = "File của bạn bị quá 1MB";
        }
        if(!isset($files_err)){
            move_uploaded_file($files['tmp_name'], 'upload/'.$files_name);
            $msg = "Upload file thành công";
        }
    }else {
        $files_err = "Bạn chưa chọn file";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <?php if(isset($msg)): ?>
        <div><?= $msg ?></div>
    <?php endif ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="files_uploaded">
        <?= $files_err?? ''?>
        <br>
        <button type="submit">Tải ảnh</button>
    </form>
</body>
</html>
