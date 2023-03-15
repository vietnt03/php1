<!DOCTYPE html>
<html>
<head>
    <title>Thanh toán sản phẩm</title>
</head>
<body>
    <h1>Thanh toán sản phẩm</h1>
    <form method="post" action="">
        <label for="productName">Tên sản phẩm:</label>
        <input type="text" name="productName" id="productName" required>
        <br>
        <label for="price">Giá:</label>
        <input type="number" min="0" step="1000" name="price" id="price" required>
        <br>
        <label for="quantity">Số lượng:</label>
        <input type="number" min="1" step="1" name="quantity" id="quantity" required>
        <br>
        <button type="submit">Tính toán</button>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $productName = $_POST["productName"];
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];
  $totalPrice = $price * $quantity;
  if ($quantity > 3) {
      $discount = $totalPrice * 0.1;
      $totalPrice -= $discount;
  } else {
      $discount = 0;
  }
?>
    <h2>Kết quả:</h2>
    <p>Tên sản phẩm: <?php echo $productName ?></p>
    <p>Giá: <?php echo ($price) ?> VNĐ</p>
    <p>Số lượng: <?php echo $quantity ?></p>
    <p>Giảm giá: <?php echo ($discount) ?> VNĐ</p>
    <p>Tổng tiền thanh toán: <?php echo ($totalPrice) ?> VNĐ</p>
<?php } ?>
</body>
</html>
