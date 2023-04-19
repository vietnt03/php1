<?php
require_once 'db.php';
if(isset($_GET)) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    
    header("location:index.php");
    die;
}