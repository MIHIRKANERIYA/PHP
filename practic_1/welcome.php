<?php
session_start();
if(isset($_SESSION['uid']))
{
echo "Weclome ".$_SESSION['uid'];
?>
<br><br><a href="logout.php"> Logout </a>
<?php
}
else
{
	echo "please login then call this page";
?>
<br><br> <a href="index.php"> Login </a>
<?php
}
?>