<?php
//Khai báo mảng sử dụng array contructor
$arr1 = array(1, 2, 3, 4, 5, 67, 76);

//lấy ra giá trị phần tử số 2
$a2 = $arr1[1];
//Thay đổi giá trị cho phần tử mảng
$arr1[1] = 100;

//in mảng
echo "<pre>";
var_dump($arr1);
print_r($arr1);
echo "</pre>";

//Mảng liên kết (kết hợp)

$student = [
    'mssv' => 'PH12345',
    'hoten' => "Nguyễn Văn A",
    'email' => 'anv@fpt.edu.vn',
    'diachi' => 'Hà Nội'
];
//Thay đổi giá trị cho email
$student['email'] = 'anvph12345@fpt.edu.vn';
echo "<pre>";
var_dump($student);
