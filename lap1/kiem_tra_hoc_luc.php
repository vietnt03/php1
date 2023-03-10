<?php
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $diem = $_POST['diem'];
    
    if ($diem < 5) {
        echo "Học lực của " . $hoten . " sinh ngày " . $ngaysinh . " là: Yếu";
    } elseif ($diem < 6.5) {
        echo "Học lực của " . $hoten . " sinh ngày " . $ngaysinh . " là: TB";
    } elseif ($diem < 7.5) {
        echo "Học lực của " . $hoten . " sinh ngày " . $ngaysinh . " là: Khá";
    } elseif ($diem < 9) {
        echo "Học lực của " . $hoten . " sinh ngày " . $ngaysinh . " là: Giỏi";
    } else {
        echo "Học lực của " . $hoten . " sinh ngày " . $ngaysinh . " là: Xuất sắc";
    }
?>
