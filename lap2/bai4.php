<?php
$numbers = array(1,2,3,4,5);

$max_number = max($numbers);
echo "Số lớn nhất trong mảng là: " . $max_number . "<br>";

$total_numbers = array_sum($numbers);
$sum_numbers = 0;

foreach ($numbers as $num) {
    $sum_numbers += $num;
}

$average = $sum_numbers / $total_numbers;
echo "Trung bình cộng các số trong mảng là: " . $average;
?>
