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
	$strSQL = "UPDATE newstb SET ";
	$strSQL .="newsleft = '".$_POST["newsleft"]."' ";
	$strSQL .=",newscenter = '".$_POST["newscenter"]."' ";
	$strSQL .=",newsright = '".$_POST["newsright"]."' ";
	$objQuery = mysqli_query($objConnect,$strSQL);
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
	mysqli_close($objConnect);
?>
</body>
</html>