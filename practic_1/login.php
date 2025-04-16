<?php
session_start();
$u=$_POST['uid'];
$p=$_POST['pass'];
$con= mysqli_connect("localhost","root","","user");
$s = mysqli_query($con,"select * from info where name='$u' and pass='$p'");

if($r= mysqli_fetch_array($s))
{
$_SESSION['name'] = $u;
header("location:welcome.php");
}
else
{
	echo "<div style='color:red; background-color:black; padding:10px;'>
	Please enter valid Username and password then continue </div>";
	include "index.php";
}
?>