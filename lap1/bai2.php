<!DOCTYPE html>
<html>
<head>
	<title>Nhập thông tin học sinh</title>
</head>
<body>
	<h2>Nhập thông tin học sinh</h2>
	<form method="post" action="kiem_tra_hoc_luc.php">
		<label for="hoten">Họ tên:</label>
		<input type="text" name="hoten" id="hoten" required><br><br>

		<label for="ngaysinh">Ngày sinh:</label>
		<input type="date" name="ngaysinh" id="ngaysinh" required><br><br>

		<label for="diem">Điểm:</label>
		<input type="number" name="diem" id="diem" step="0.1" required><br><br>

		<input type="submit" value="Kiểm tra học lực">
	</form>
</body>
</html>
