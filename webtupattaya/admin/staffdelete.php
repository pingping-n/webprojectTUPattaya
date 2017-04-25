<?php
$objConnect = mysqli_connect("localhost","root","1234","WebTUPattaya") or die("Error Connect to Database");

$strStaffID = $_GET["staffID"];
$sql = "DELETE FROM stafftb WHERE staffID = '".$strStaffID."' ";

$query = mysqli_query($objConnect,$sql);

if(mysqli_affected_rows($objConnect)) {
	echo "Record ($strStaffID) delete successfully";
}

mysqli_close($objConnect);
echo "<meta http-equiv='refresh' content='2;url=staff.php'>";
?>