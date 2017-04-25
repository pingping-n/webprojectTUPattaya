<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<!--<link rel="stylesheet" type="text/css" href="main.css">-->
</head>
<body>
<?php
	$objConnect = mysql_connect("localhost","root","admin") or die("Error Connect to Database");
	$objDB = mysql_select_db("WebTUPattaya");
	$strSQL = "SELECT * FROM stafftb WHERE staffID = '".$_GET["staffID"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
?>
	<form name="form1" method="post" action="staffsave1.php?staffID=<?php echo $_GET["staffID"];?>" enctype="multipart/form-data">
		แก้ไขรูปภาพ :<br>
		ชื่อ-สกุล : <input type="text" name="txtName" value="<?php echo $objResult["name"];?>"><br>
		สถานะ : <select name="status" id="status">
				<option value="staff">staff</option>
				<option value="soften">soften</option>
				<option value="auto">auto</option>
				</select><br>
		ประวัติ : <input type="text" name="txtProfile" value="<?php echo $objResult["profile"];?>"><br>
		<img src="myfile/<?php echo $objResult["filesname"];?>"><br>
		รูปภาพ : <input type="file" name="filUpload"><br>
		<input type="hidden" name="hdnOldFile" value="<?php echo $objResult["filesname"];?>">
		<input name="btnSubmit" type="submit" value="Submit">
	</form>
</body>
</html>