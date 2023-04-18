<?php
//Hàm không biết trước số lượng tham số
function tinhtongso()
{
    //Lấy các tham số truyền vào hàm
    $arr = func_get_args();
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}

//gọi hàm
$sum = tinhtongso(12, 32, 3, 2131, 23, 12, 31, 21);
echo "<h2>TỔng = $sum</h2>";
