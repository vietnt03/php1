<!DOCTYPE html>
<html>
<head>
	<title>Form nhập thông tin sinh viên</title>
</head>
<body>
	<h2>Nhập thông tin sinh viên</h2>
	<form action="" method="POST">
		<label for="mssv">MSSV:</label>
		<input type="text" id="mssv" name="mssv"><br><br>

		<label for="hoten">Họ tên:</label>
		<input type="text" id="hoten" name="hoten"><br><br>

		<label for="ngaysinh">Ngày sinh:</label>
		<input type="date" id="ngaysinh" name="ngaysinh"><br><br>

		<label for="diem">Điểm:</label>
		<input type="number" id="diem" name="diem" min="0" max="10"><br><br>

		<input type="submit" value="Submit">
	</form>

	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$mssv = $_POST["mssv"];
			$hoten = $_POST["hoten"];
			$ngaysinh = $_POST["ngaysinh"];
			$diem = $_POST["diem"];

			echo "<h2>Thông tin sinh viên</h2>";
			echo "MSSV: " . $mssv . "<br>";
			echo "Họ tên: " . $hoten . "<br>";
			echo "Ngày sinh: " . $ngaysinh . "<br>";
			echo "Điểm: " . $diem . "<br>";

			if(quaMon($diem)){
				echo "Sinh viên này đã qua môn";
			}else{
				echo "Sinh viên này chưa qua môn";
			}
		}

		function quaMon($diem){
			if($diem >= 5){
				return true;
			}else{
				return false;
			}
		}
	?>
</body>
</html>
