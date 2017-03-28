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
			<p>หน้าที่ท่านต้องการจะแก้ไข</p>
			<form action="/action_page.php" method="get" style="margin-top: 10px; padding: 20px;">
				<input type="checkbox" name="tu" value="home">หน้าหลัก<br>
				<input type="checkbox" name="tu" value="student">นักศึกษา<br>
				<input type="checkbox" name="tu" value="contact">บุคลากร<br>
				<input type="checkbox" name="tu" value="program">สาขาวิชา<br>
				<input type="checkbox" name="tu" value="dome">สภาพความเป็นอยู่นักศึกษา<br>
				<input type="checkbox" name="tu" value="about">ผู้สนใจเข้าศึกษา<br>
				<!--<input type="submit" value="Submit">-->
				<button><a href="logout.php">Logout</a></button>
				
			</form>
		</div>
	</div>
</body>
</html>