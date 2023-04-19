<?php
try {
    $conn = new PDO("mysql:host=localhost; dbname=web2014; charset=utf8", "root", "");

} catch (PDOException$e) {
    echo "Error: " . $e->getMessage();
}