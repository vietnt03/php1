<?php

$product1_name = $_POST["product1_name"];
$product1_price = $_POST["product1_price"];
$product2_name = $_POST["product2_name"];
$product2_price = $_POST["product2_price"];
$product3_name = $_POST["product3_name"];
$product3_price = $_POST["product3_price"];


$max_price = max($product1_price, $product2_price, $product3_price);


echo "<h2>sản phẩm có giá cao nhất là </h2>";
if ($product1_price == $max_price) {
  echo "<p>tên sản phẩm: $product1_name | giá là: $product1_price</p>";
} elseif ($product2_price == $max_price) {
  echo "<p>tên sản phẩm : $product2_name | giá là: $product2_price</p>";
} else {
  echo "<p>tên sản phẩm : $product3_name | giá là: $product3_price</p>";
}
?>
