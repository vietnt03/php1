<!DOCTYPE html>
<html>
<head>
	<title>Nhập số lượng món ăn</title>
</head>
<body>
	<h2>Nhập số lượng món ăn</h2>
	<form method="post" action="tinh_tien.php">
		<label for="rau">Rau:</label>
		<input type="number" name="rau" id="rau" min="0"><br><br>

		<label for="com">Cơm:</label>
		<input type="number" name="com" id="com" min="0"><br><br>

		<label for="trung">Trứng:</label>
		<input type="number" name="trung" id="trung" min="0"><br><br>

		<label for="thitbo">Thịt bò:</label>
		<input type="number" name="thitbo" id="thitbo" min="0"><br><br>

		<label for="thitlon">Thịt lợn:</label>
		<input type="number" name="thitlon" id="thitlon" min="0"><br><br>

		<input type="submit" value="Tính tiền">
	</form>
</body>
</html>
