<?php
    $numbers = array(5,10,15,20);
    $sum = 0;

    foreach($numbers as $number) {
        if ($number > 10 && $number % 3 == 0) {
            $sum += $number;
        }
    }

    echo "Tổng các số > 10 và chia hết cho 3 trong mảng là: " . $sum;
?>
