<br><br>
<div style="border:2px groove #ff0000; ">
	<!-- width:50% ;padding;20px; margin:0 auto; -->
<form action="" method="post">
<div >Sign Up Here
<!-- style="color:red: padding:10px: font-size:27px;margin:0 auto; width:50%;" -->
</div>
<div >
<!-- style="color:red: padding:10px: font-size:23px;margin:0 auto; width:50%;" -->
UserName <br> 
<input type="text" name="uid" value="" placeholder="enter username"  required>
<!-- style="padding:10px;width:90%;" -->
</div>

<div >
<!-- style="color:red: padding:10px: font-size:23px;margin:0 auto; width:50%;" -->
Password <br> 
<input type="password" name="pass" value="" placeholder="enter password" required>
<!-- style="padding:10px;width:90%;"  -->
</div>

<div >
	<!-- style="color:red: padding:10px: font-size:23px;margin:0 auto; width:50%;" -->
Confirm Password <br> 
<input type="password" name="cpass" value="" placeholder="enter confirm password"  required>
<!-- style="padding:10px; width:90%;" -->
</div>

<div >
<!-- style="color:red: padding:10px: font-size:23px;margin:0 auto; width:50%;" -->
Email <br> 
<input type="email" name="email" value="" placeholder="enter email" required>
<!-- style="padding:10px;width:90%;"  -->
</div>


<div >
<!-- style="color:red: padding:10px: font-size:23px;margin:0 auto; width:50%;" -->
 
<input type="submit" name="s" value="Register Now" >
<!-- style="padding:10px;width:50%;" -->
<a href="index.php" > login here </a>
<!-- style="color:blue; text-decoration:none;" -->
</div>
<form>
</div>

<?php
if(isset($_POST['s']))
{
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$email=$_POST['email'];

if($pass!=$cpass)
{
	echo "<script> alert('both password are not same') </script>";
}
else
{
$con=mysqli_connect("localhost","root","","user");
mysqli_query($con,"insert into info(name,pass,email) values('$uid','$pass','$email')");
echo "<script>alert('registration successfully') </script>";
header("location:index.php"); 
}
}
?>
