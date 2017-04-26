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
				แก้ไขข่าวที่อยู่ในหน้าหลักสูตร
				<button><a href="admin1.php" style="text-decoration:none">กลับหน้าหลัก</a></button>
			</p>
			<form action="programsave.php" method="post">
				<?php
					$strSQL = "SELECT * FROM programtb";
					$objQuery = mysqli_query($objConnect,$strSQL);
					$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
				?>
				SOFTWARE<br>
				<textarea rows="10" cols="100" name="txtsoften"><?php echo $objResult["txtSoftEN"];?></textarea><br>
  				AUTO<br>
				<textarea rows="10" cols="100" name="txtauto"><?php echo $objResult["txtAuto"];?></textarea><br>
  				<input type="submit" name="submit" value="ยืนยัน">
  				<?php
  					mysqli_close($objConnect);
  				?>
			</form>
		</div>
	</div>
</body>
</html>