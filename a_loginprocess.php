<?php
include 'ecofidb.php';

$ad_username=$_POST['ad_username'];
$ad_password=$_POST['ad_password'];

$sql=mysqli_query($con, "SELECT * FROM admin WHERE ad_username ='$ad_username' AND ad_password ='$ad_password'");

$row=mysqli_fetch_array($sql);
$count=mysqli_num_rows($sql);

if($count==1)
{
	header("Location:a_homepage.php");
}
else
{
	echo "<script>alert('Wrong username or password')</script>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/FYP System/a_login.php';\",500);</script>";
}


?>