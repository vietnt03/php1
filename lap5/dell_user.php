<?php
require_once 'connection.php'; 


$id = $_GET['mabv'];

$sql = "DELETE FROM baiviet WHERE mabv=$id";


$stmt = $conn->prepare($sql);

$stmt ->execute();

$msg ="Xóa dữu liệu thành công";
header("location: hienthi.php?msg=$msg");
die;