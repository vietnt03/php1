<?php

/**
 * Lấy dữ liệu theo phương thức POST
 * sử dụng biến super global $_POST
 */
$hoten = $_POST['hoten'];
$email = $_POST['email'];

echo "<h2>Họ tên: $hoten</h2>";
echo "<h2>Email: $email</h2>";
