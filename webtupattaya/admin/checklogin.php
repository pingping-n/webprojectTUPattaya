<?
$admin_user = "admin";
$admin_pwd = "1234";

$user_login = (isset($_REQUEST["user_login"])) ? $_REQUEST["user_login"] : $_SESSION["sesuser_wb"];
$pwd_login = (isset($_REQUEST["pwd_login"])) ? $_REQUEST["pwd_login"] : $_SESSION["sespasswd_wb"];

if (($user_login == "") || ($pwd_login == "")) {
	echo "<br>Fill Username or Password!";
	echo "<meta http-equiv='refresh' content='2;url=admin.html'>";
} elseif (($user_login != $admin_user) || ($pwd_login != $admin_pwd)) {
	echo "<br>Username or Password incorect!";
	echo "<meta http-equiv='refresh' content='2;url=admin.html'>";
} else {
	session_start();
	$_SESSION["sess_userlogin"] = $user_login;
	header("location:admin1.html");
}
?>