<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "admin";
$dbName = "WebTUPattaya";

$objConnect = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die("Error Connect to Database");
?>