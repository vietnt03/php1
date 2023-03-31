<?php

require_once("connection.php");
$id = $_GET ["id"];
$sql = "delete from Categories where id =$id";
$stmt = $conn-> prepare($sql) ;
$stmt->execute();
$msg = "xóa dữ liệu thành công";
header("location: categories.php?msg=$msg" )  

?>
