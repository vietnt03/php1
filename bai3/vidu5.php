<?php

//Hàm lambda (hàm không tên)
$hello = function () {
    echo "<h2>Xin chào các bạn web2014.02</h2>";
};
//GỌi hàm
$hello();

$name = function ($hoten = 'Nguyễn Văn A') {
    echo "<h2>Xin chào $hoten</h2>";
};

$name('Lê Văn Long');

//Hàm closure
//hàm này cho phép sử dụng biến bên ngoài
$msg = "FPT Polytechnic";
$school = function () use ($msg) {
    $msg .= "<br>Thực học - thực nghiệp";
    echo "<h1>$msg</h1>";
};
//gọi hàm
$school();
