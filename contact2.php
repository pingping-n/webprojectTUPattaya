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
				<img src="images/logo_tu.gif" width="100px" height="100px">
			</div>
			<div class="right-header">
				มหาวิทยาลัยธรรมศาตร์<br>
				THAMMASAT UNIVERSITY<br>
				ศูนย์พัทยา
			</div>
		</div>
		<div class="content">
			<div class="top-content">
				<img src="images/02.jpg" width="960" height="400">
				<ul class="menu">
					<ppn><a href="home.php">หน้าหลัก</a></ppn>
					<ppn><a class="active" href="contact.php">บุคลากร</a></ppn>
					<ppn><a href="program.php">สาขาวิชา</a></ppn>
					<ppn><a href="dome.php">สภาพความเป็นอยู่นักศึกษา</a></ppn>
					<ppn><a href="about.php">ผู้สนใจเข้าศึกษา</a></ppn>
					<ppn><a href="contractus.php">ติดต่อเรา</a></ppn>
				</ul>
			</div>
			<div class="bottom-content">
				<div class="column-left">
					<ul>
						<li><a href="contact.php">ภาควิชาวิศวกรรมซอฟต์แวร์</a></li>
						<li><a href="contact1.php">ภาควิชาวิศวกรรมยานยนต์</a></li>
						<li><a href="contact2.php">เจ้าหน้าที่</a></li>
					</ul>
				</div>
				<div class="column-right">
					<div style="overflow: scroll; height: 100%;">
						<?php
						include 'conDB.php';
						$strSQL = "SELECT * FROM stafftb WHERE status='staff' ORDER BY staffID";
						$objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");
						?>
						<?php
						while($objResult = mysqli_fetch_array($objQuery))
						{
							?>
							<div style="margin-bottom: 50px;">
								<center><?php echo $objResult["name"];?></center>
								<center><img src="admin/myfile/<?php echo $objResult["filesname"];?>" width="180px" height="200px"></center>
								<center><?php echo $objResult["profile"];?></center>
							</div>
							<?php
						}
						mysqli_close($objConnect);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>