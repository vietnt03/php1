<?php
require_once "connection.php";
if (isset($_GET['id']) ) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products where id ='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location: index.php");
    exit();
} 

?>