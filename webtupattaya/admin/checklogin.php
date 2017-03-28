<?
session_start();
mysql_connect("localhost","root","1234");
mysql_select_db("WebTUPattaya");
$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['user_login'])."' 
and Password = '".mysql_real_escape_string($_POST['pwd_login'])."'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if(!$objResult) {
	echo "<br>Username and Password Incorrect!";
	echo "<meta http-equiv='refresh' content='2;url=admin.php'>";
} else {
	session_start();
	$_SESSION["UserID"] = $objResult["UserID"];
	session_write_close();
	header("location:admin1.php");
}
mysql_close();
?>