<?php
include 'include/connectDB.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya_Admin</title>
	<!--<link rel="stylesheet" type="text/css" href="main.css">-->
</head>
<body>
	<div class="header-cont">
		<div class="header">
			<div class="left-header">
				<img src="logo_tu.gif" width="70px" height="70px">
			</div>
			<div class="right-header">
				มหาวิทยาลัยธรรมศาตร์<br>
				THAMMASAT UNIVERSITY<br>
				ศูนย์พัทยา
			</div>
		</div>
		<div class="content">
			<p>
				เลือกเนื้อหาหน้าที่ท่านต้องการจะแก้ไข
				<button><a href="logout.php" style="text-decoration:none">ออกจากระบบ</a></button>
			</p>
			<a href="home.php">หน้าหลัก</a><br>
			<a href="staff.php">บุคลากร</a><br>
			<a href="program.php">สาขาวิชา</a><br>
		</div>
	</div>
</body>
</html>