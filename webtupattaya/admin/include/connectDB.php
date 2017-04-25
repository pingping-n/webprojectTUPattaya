<?php
session_start();
if($_SESSION['UserID'] == "")
{
	echo "Please Login!";
	exit();
}

mysql_connect("localhost","root","1234") or die("Error Connect to Database");
mysql_select_db("WebTUPattaya");
$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
?>