<?php
require_once 'connection.php';

//Lấy id
$id = $_GET['id'];
//Câu lệnh Xóa dữ liệu theo id
$sql = "DELETE FROM categories WHERE id=$id";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi
$stmt->execute();
//thông báo
$msg = "Xóa dữ liệu thành công";
header("location: categories.php?msg=$msg");
die;
