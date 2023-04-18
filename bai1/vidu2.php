<?php
$a = 1;
if ($a) {
    echo "<h1>Đây là điều kiện đúng</h1>";
} else {
    echo "<h1>Đây là điều kiện sai</h1>";
}

//Sử dụng else if(ĐK)
$a = 15;
if ($a > 10) {
    echo "$a > 10";
} else if ($a == 10) {
    echo $a . " == 10";
} else {
    echo "$a < 10";
}
