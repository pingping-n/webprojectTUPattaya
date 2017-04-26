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
	$strSQL = "UPDATE programtb SET ";
	$strSQL .="txtSoftEN = '".$_POST["txtsoften"]."' ";
	$strSQL .=",txtAuto = '".$_POST["txtauto"]."' ";
	$objQuery = mysqli_query($objConnect,$strSQL);
	if($objQuery)
	{
		echo "Save Done.";
		echo "<meta http-equiv='refresh' content='2;url=program.php'>";
		
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