<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<!--<link rel="stylesheet" type="text/css" href="main.css">-->
</head>
<body>
<?php

		//*** Update Record ***//
		$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
		$objDB = mysql_select_db("WebTUPattaya");

		$strSQL = "UPDATE stafftb ";
		$strSQL .=" SET name = '".$_POST["txtName"]."' WHERE staffID = '".$_GET["staffID"]."' ";
		$strSQL = "UPDATE stafftb ";
		$strSQL .=" SET profile = '".$_POST["txtProfile"]."' WHERE staffID = '".$_GET["staffID"]."' ";
		$strSQL = "UPDATE stafftb ";
		$strSQL .=" SET status = '".$_POST["status"]."' WHERE staffID = '".$_GET["staffID"]."' ";
		$objQuery = mysql_query($strSQL);		
	
	if($_FILES["filUpload"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("myfile/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE stafftb ";
			$strSQL .=" SET filesname = '".$_FILES["filUpload"]["name"]."' WHERE staffID = '".$_GET["staffID"]."' ";
			$objQuery = mysql_query($strSQL);		

			echo "Copy/Upload Complete<br>";
		}
	}
	echo "Edit Complete<br>";
	echo "<meta http-equiv='refresh' content='2;url=staff.php'>";
?>
</body>
</html>