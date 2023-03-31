<?php
require_once("db.php");
$id = $_GET ["id"];
$sql = "delete from user where id =$id";
$stmt = $conn-> prepare($sql) ;
$stmt->execute();
$msg = "xóa dữ liệu thành công";
header("location: user.php?msg=$msg" )  

?>