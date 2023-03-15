<?php
// khai báo mảnh 
$arr = array(1,3,3,4);
$arr[1] = 100;
echo "<pre >";
var_dump($arr);

// mảng kết hợp 
$sv = [
    'id' => 1,
    'name' => 'abc',
    'email' => 'abc@example.com',
    'address' => '123 ha noi'
];
var_dump($sv);

// thay đổi giá trị
$sv = ['email ' => 'abc@example.com.vn'];

// vòng lặp 
for($i = 0; $i < 10; $i++){
    echo("haha <br>");
}  
$dem  = 0; 
// vòng lặp do while
do{
    $dem++;
    if($dem  %2==1){
        continue;
    }
    echo(" $dem đá,ávdma <br>");

   
}while($dem <20); 

// for each
 
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
