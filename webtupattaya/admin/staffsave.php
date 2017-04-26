<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<!--<link rel="stylesheet" type="text/css" href="main.css">-->
</head>
<body>
<?php
	include 'condb.php';
	$strSQL = "SELECT * FROM stafftb WHERE staffID = '".$_GET["staffID"]."' ";
	$objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
	<form name="form1" method="post" action="staffsave1.php?staffID=<?php echo $_GET["staffID"];?>">
	<input type="hidden" name="staffID" value="<?php echo $result["staffID"];?>"><?php echo $result["staffID"];?>
		แก้ไขรูปภาพ :<br>
		ชื่อ-สกุล : <input type="text" name="txtName" id="txtName" value="<?php echo $objResult["name"];?>"><br>
		สถานะ : <select name="status" id="status">
				<option value="staff">staff</option>
				<option value="soften">soften</option>
				<option value="auto">auto</option>
				</select><br>
		ประวัติ : <input type="text" name="txtProfile" id="txtProfile" value="<?php echo $objResult["profile"];?>"><br>
		<img src="myfile/<?php echo $objResult["filesname"];?>"><br>
		รูปภาพ : <input type="file" value="Choose file" accept="image/*" id="filUpload" name="filUpload"><br>
		<input type="hidden" name="hdnOldFile" id="hdnOldFiles" value="<?php echo $objResult["filesname"];?>">
		<input name="Submit" type="submit" value="Submit">
	</form>
	<?php
		mysqli_close($objConnect);
	?>
</body>
</html>