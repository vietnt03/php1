<?php
//Khai báo hàm
function hello()
{
    echo "<h2>Xin chào các bạn</h2>";
}

//Gọi hàm
hello();
//hàm có tham số và giá trị trả về
function tinhtong($a, $b)
{
    return $a + $b;
}
//Gọi hàm
$sum = tinhtong(10, 20);
echo "<h2>Tổng = $sum</h2>";
//Hàm tham số có giá trị mặc định
function hello2($name = 'ngocbq')
{
    echo "<h2>Xin chào $name</h2>";
}
//gọi hàm
hello2();

//Phạm vi của biến
//Biến toàn cục
$msg = "Thực học - thực nghiệp";
function show_message()
{
    global $msg;
    echo "<h1>$msg</h1>";
}
show_message();
