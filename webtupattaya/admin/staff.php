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
				แก้ไขข้อมูลสตาฟในหน้าสตาฟ
				<button><a href="staffadd.php" style="text-decoration:none">เพิ่มสตาฟ</a></button>
				<button><a href="admin1.php" style="text-decoration:none">กลับหน้าหลัก</a></button>
			</p>
			<?php
			$strSQL = "SELECT * FROM stafftb ORDER BY staffID";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			?>
			<table width="1000" border="1">
			  <tr>
			    <th width="100"> <div align="center">Staff_ID </div></th>
			    <th width="100"> <div align="center">Status</div></th>
			    <th width="150"> <div align="center">Name </div></th>
			    <th width="200"> <div align="center">Profile </div></th>
			    <th width="200"> <div align="center">Picture </div></th>
			    <th width="100"> <div align="center">Edit </div></th>
			    <th width="100"> <div align="center">Delete </div></th>
			  </tr>
			<?php
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
			<tr>
			<td><div align="center"><?php echo $objResult["staffID"];?></div></td>
			<td><center><?php echo $objResult["status"];?></center></td>
			<td><center><?php echo $objResult["name"];?></center></td>
			<td><center><?php echo $objResult["profile"];?></center></td>
			<td><center><img src="myfile/<?php echo $objResult["filesname"];?>" width="120px" height="150px"></center></td>
			<td><center><a href="staffsave.php?staffID=<?php echo $objResult["staffID"];?>">Edit</a></center></td>
			<td><center><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='staffdelete.php?staffID=<?php echo $objResult["staffID"];?>';}">Delete </a></center></td>
			</tr>
			<?php
			}
			?>
			</table>
		</div>
	</div>
</body>
</html>