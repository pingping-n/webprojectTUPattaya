<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<!--<link rel="stylesheet" type="text/css" href="main.css">-->
</head>
<body>
<?php
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		include 'include/condb.php';
		$strSQL = "INSERT INTO stafftb ";
		$strSQL .="(name,status,profile,filesname) VALUES ('".$_POST["txtName"]."','".$_POST["status"]."','".$_POST["txtProfile"]."','".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysql_query($strSQL);
		echo "<meta http-equiv='refresh' content='2;url=staff.php'>";
	} else {
		echo "Need Picture!!";
		echo "<meta http-equiv='refresh' content='2;url=staffadd.php'>";
	}
?>
</body>
</html>