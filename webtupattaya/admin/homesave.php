<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<!--<link rel="stylesheet" type="text/css" href="main.css">-->
</head>
<body>
<?php
	include 'include/condb.php';
	$strSQL = "UPDATE newstb SET ";
	$strSQL .="newsleft = '".$_POST["newsleft"]."' ";
	$strSQL .=",newscenter = '".$_POST["newscenter"]."' ";
	$strSQL .=",newsright = '".$_POST["newsright"]."' ";
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