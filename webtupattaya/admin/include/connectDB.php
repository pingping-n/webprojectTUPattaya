<?php
session_start();
if($_SESSION['UserID'] == "")
{
	echo "Please Login!";
	exit();
}

include 'condb.php';
$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysqli_query($objConnect,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>