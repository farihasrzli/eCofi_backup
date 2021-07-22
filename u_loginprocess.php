<?php
include 'ecofidb.php';

$u_username=$_POST['u_username'];
$u_password=$_POST['u_password'];

$sql=mysqli_query($con, "SELECT * FROM user WHERE u_username ='$u_username' AND u_password ='$u_password'");

$row=mysqli_fetch_array($sql);
$count=mysqli_num_rows($sql);

if($count==1)
{
	header("Location:u_homepage.php");
}
else
{
	echo "<script>alert('Wrong username or password')</script>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/FYP System/u_login.php';\",500);</script>";
}


?>