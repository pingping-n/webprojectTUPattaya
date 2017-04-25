<?php
session_start();
if($_SESSION['UserID'] == "")
{
	echo "Please Login!";
	exit();
}

include 'include/condb.php';
$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
?>