<?php
$numbers = array(2, 5, 8, 12, 15, 20, 25);

// Tìm số lớn nhất trong mảng
$max_number = max($numbers);
echo "Số lớn nhất trong mảng là: " . $max_number . "<br>";

// Tính trung bình cộng các số trong mảng
$total_numbers = count($numbers);
$sum_numbers = 0;

foreach ($numbers as $num) {
    $sum_numbers += $num;
}

$average = $sum_numbers / $total_numbers;
echo "Trung bình cộng các số trong mảng là: " . $average;
?>
