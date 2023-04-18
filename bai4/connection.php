<?php

/**
 * file connection dùng để kết nối đến CSDL
 */
$host = "localhost";
$dbname = "web2014.02";
$username = "root";
$password = "";

try {
    //Tạo chuỗi kết nối CSDL
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    //Set thông báo lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Kiểm tra thành công (nhớ xóa sau khi kiểm tra xong)
    // echo "Kết nối dữ liệu thành công";
} catch (PDOException $e) {
    echo "Lỗi kết nối <br />" . $e->getMessage();
}
