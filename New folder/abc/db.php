<?php
try {
    $conn = new PDO ("mysql:host=localhost; dbname=onthi; charset=utf8", "root", "");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
