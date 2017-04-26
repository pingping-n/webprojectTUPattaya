<?php
include 'include/connectDB.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<!--<link rel="stylesheet" type="text/css" href="main.css">-->
</head>
<body>
	<form name="form1" method="post" action="staffadd1.php" enctype="multipart/form-data">
		ชื่อ-นามสกุล : <input type="text" name="txtName"><br>
		สถานะ : <select name="status" id="status">
				<option value="staff">staff</option>
				<option value="soften">soften</option>
				<option value="auto">auto</option>
				</select><br>
		ประวัติ : <input type="text" name="txtProfile"><br>
		รูปภาพ : <input type="file" value="Choose file" accept="image/*" id="filUpload" name="filUpload"><br>
	<input name="submit" type="submit" value="ยืนยัน">
</form>
</body>
</html>