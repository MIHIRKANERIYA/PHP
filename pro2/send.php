<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "feedback";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
    die("Can not connect" . mysqli_connect_error());
}

$user = $_POST["username"];
$email = $_POST["email"];
$suggetion=$_POST['suggetion'];
$message = $_POST["message"];

$sql = "INSERT INTO greetings (user, email,suggetion, message) VALUES ('$user', '$email', '$suggetion','$message')";

if(mysqli_query($conn, $sql)){
    echo ("Data added Successfully");
	echo "<a href='viewdata.php'> viewdata </a>";
}
else {
    echo "Something went wrong";
}


?>