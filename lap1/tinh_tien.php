<!DOCTYPE html>
<html>
<head>
	<title>Tính tiền món ăn</title>
</head>
<body>
	<?php
		$rau = $_POST["rau"];
		$com = $_POST["com"];
		$trung = $_POST["trung"];
		$thitbo = $_POST["thitbo"];
		$thitlon = $_POST["thitlon"];

		$tong_tien = $rau * 5 + $com * 8 + $trung * 8 + $thitbo * 20 + $thitlon * 13;

		echo "<h2>Tổng số tiền phải trả là: $tong_tien đồng</h2>";
	?>
</body>
</html>
