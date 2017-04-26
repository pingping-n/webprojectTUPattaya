<?php
session_start();
include 'condb.php';

$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objConnect,$_POST['user_login'])."' 
	AND Password = '".mysqli_real_escape_string($objConnect,$_POST['pwd_login'])."'";
	$objQuery = mysqli_query($objConnect,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

if(!$objResult) {
	echo "<br>Username and Password Incorrect!";
	echo "<meta http-equiv='refresh' content='2;url=admin.php'>";
} else {
	$_SESSION["UserID"] = $objResult["UserID"];
	session_write_close();
	header("location:admin1.php");
}
mysqli_close($objConnect);
?>