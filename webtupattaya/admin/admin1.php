<?php
session_start();
if($_SESSION['UserID'] == "")
{
	echo "Please Login!";
	exit();
}

mysql_connect("localhost","root","1234");
mysql_select_db("WebTUPattaya");
$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
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
			<p>เลือกเนื้อหาหน้าที่ท่านต้องการจะแก้ไข</p>
			<a href="home.php">หน้าหลัก</a><br>
			<a href="staff.php">บุคลากร</a><br>
			<a href="program.php">สาขาวิชา</a><br>
			<button><a href="logout.php" style="text-decoration:none">ออกจากระบบ</a></button>
		</div>
	</div>
</body>
</html>