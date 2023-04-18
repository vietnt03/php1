<?php
//Vòng lặp for
for ($i = 1; $i < 6; $i++) {
    echo "<h2> $i. Hahahahaha ...</h2>";
}

//Vòng lặp while
$dem = 0;
while (true) {
    $dem++;
    echo "<h2>$dem. Ahihiiiiii ......</h2>";
    //Nếu dem >= 10 thì thoát khỏi vòng lặp
    if ($dem >= 10) {
        break;
    }
}
echo "ĐẾM = $dem";
//Vòng do .. while
do {
    $dem++;
    if ($dem % 2 == 1) {
        continue;
    }
    echo "<h1>$dem. xin chào các bạn Ahiiiii</h1>";
} while ($dem < 20);

$arr = [12, 2, 43, 5, 6];
foreach ($arr as $value) {
    echo $value . " - ";
}
echo "<br />";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " - ";
}
