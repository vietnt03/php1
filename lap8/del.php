<?php
require_once "db.php";
if(isset ($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM sinhvien WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt-> execute();
    header("location: index.php ");
    exit();
}
else{
    header("location: index.php");
    exit();
}

?>