<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1 align="center">Zent Group-PHP-Thực hành về gửi dữ liệu dùng POST</h1>
	<h3 align="center">Thông tin sinh viên</h3>
</body>
</html>

<?php

	if (isset($_POST['maSV'])) {
		echo "Mã sinh viên: " . $_POST['maSV'];
	}
	if (isset($_POST['name'])) {
		echo "<br>Họ và tên: " . $_POST['name'];
	}
	if (isset($_POST['phone'])) {
		echo "<br>Số điện thoại: " . $_POST['phone'];
	}
	if (isset($_POST['email'])) {
		echo "<br>Email: " . $_POST['email'];
	}
	if (isset($_POST['address'])) {
		echo "<br>Địa chỉ: " . $_POST['address'];
	}
	if (isset($_POST['sex'])) {
		echo "<br>Giới tính: " . $_POST['sex'];
	}

 ?>