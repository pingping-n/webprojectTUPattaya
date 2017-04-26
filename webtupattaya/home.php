<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="header-cont">
		<div class="header">
			<div class="left-header">
				<img src="images/logo_tu.gif" width="70px" height="70px">
			</div>
			<div class="right-header">
				มหาวิทยาลัยธรรมศาตร์<br>
				THAMMASAT UNIVERSITY<br>
				ศูนย์พัทยา
			</div>
		</div>
		<div class="content">
			<div class="top-content">
				<img src="images/01_header.jpg" width="960" height="400">
				<ul class="menu">
					<ppn><a class="active" href="home.php">หน้าหลัก</a></ppn>
					<ppn><a href="contact.php">บุคลากร</a></ppn>
					<ppn><a href="program.php">สาขาวิชา</a></ppn>
					<ppn><a href="dome.php">สภาพความเป็นอยู่นักศึกษา</a></ppn>
					<ppn><a href="about.php">ผู้สนใจเข้าศึกษา</a></ppn>
					<ppn><a href="contractus.php">ติดต่อเรา</a></ppn>
				</ul>
			</div>
			<div class="bottom-content">
				<?php
				include 'conDB.php';

				$strSQL = "SELECT * FROM newstb";
				$objQuery = mysqli_query($objConnect,$strSQL);
				$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
				?>
				<div class="column-left-home">
					<p>
						<?php echo $objResult["newsleft"];?>
					</p>
				</div>
				<div class="column-center-home">
					<p>
						<?php echo $objResult["newscenter"];?>
					</p>
				</div>
				<div class="column-right-home">
					<p>
						<?php echo $objResult["newsright"];?>	 
					</p>
				</div>
				<?php
				mysqli_close($objConnect);
				?>
			</div>
		</div>
	</div>
</body>
</html>