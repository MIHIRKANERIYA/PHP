<?php 
$con = mysqli_connect("localhost","root",""); 
if (!$con) 
{ 
  die('Could not connect: ' . mysqli_error($con)); 
} 
mysqli_select_db($con,"feedback"); 
$result = mysqli_query($con,"SELECT * FROM greetings"); 
 
echo "<table border='1'> 
<tr> 
<th>user</th> 
<th>email</th> 
<th>suggetion</th> 
<th>message</th>
</tr>"; 
while($row = mysqli_fetch_array($result)) 
  { 
  echo "<tr>"; 
   echo "<td>" . $row['user'] . "</td>"; 
  echo "<td>" . $row['email'] . "</td>"; 
  echo "<td>" . $row['suggetion'] . "</td>"; 
  echo "<td>" . $row['message'] . "</td>"; 
  echo "</tr>"; 
  } 
echo "</table>"; 

mysqli_close($con); 
?> 