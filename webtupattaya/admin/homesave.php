<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<!--<link rel="stylesheet" type="text/css" href="main.css">-->
</head>
<body>
<?php
	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("WebTUPattaya");
	$strSQL = "UPDATE newstb SET ";
	$strSQL .="detailnews = '".$_POST["txtnews"]."' ";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
		echo "Save Done.";
		echo "<meta http-equiv='refresh' content='2;url=home.php'>";
		
	}
	else
	{
		echo "Error Save [".$strSQL."]";
		header("location:home.php");
	}
	mysql_close($objConnect);
?>
</body>
</html>