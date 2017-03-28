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
	<title>TU-Pattaya</title>
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
				แก้ไขข่าวที่อยู่ในหน้าหลัก
			</p>
			<form action="homesave.php" method="post">
				<?php
					$strSQL = "SELECT * FROM newstb";
					$objQuery = mysql_query($strSQL);
					$objResult = mysql_fetch_array($objQuery);
				?>
				<textarea rows="10" cols="100" name="txtnews"><?php echo $objResult["detailNews"];?></textarea><br>
  				<input type="submit" name="submit" value="ยืนยัน">
  				<?php
  					mysql_close();
  				?>
			</form>
			<button><a href="admin1.php" style="text-decoration:none">กลับหน้าหลัก</a></button>
		</div>
	</div>
</body>
</html>