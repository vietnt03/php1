<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $tong = $number1+$number2 ;
    echo "$number1+ $number2 =$tong";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tính tổng </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



</head>

<body>
    <form action="tinhtong.php" method=" POST">
        <div class="form-outline">
            <input type="number" id="typeNumber" class="form-control" name="number1" />
            <label class="form-label" for="typeNumber">số thứ 1</label>
        </div>
        <div class="form-outline">
            <input type="number" id="typeNumber" class="form-control" name="number2" />
            <label class="form-label" for="typeNumber">số thứ 2</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">tính tổng</button>
    </form>
</body>

</html>