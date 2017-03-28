<?
session_start();
$sess_userlogin = $_SESSION["sess_userlogin"];

if ($sess_userlogin == "") {
	echo "<br>Please login!";
	echo "<meta http-equiv='refresh' content='2;url=main.php'>";
	exit();
}
?>