<?php
$user="root";
$pass="";
$db="chat";
$come="****comes*****";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,"chat");
$query="delete from hello_world  ";
	mysqli_query($conn,$query);
echo '<a href="index_p.php">back</a>';
?>