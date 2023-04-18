<?php

/**
 * Lấy dữ liệu theo phương thức GET
 * sử dụng biến super global $_GET
 */
$hoten = $_GET['hoten'];
$email = $_GET['email'];

echo "<h2>Họ tên: $hoten</h2>";
echo "<h2>Email: $email</h2>";
