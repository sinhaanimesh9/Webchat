<?php
if(@$_SERVER[REMOTE_ADDR]==="::1")
{
$host="127.0.0.1";
$user="root";
$pass="";
$db="chat";

$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
$query="delete from hello_world  ";
	mysqli_query($conn,$query);
echo '<b>DELETE done successfully....</b><b><a href="del.html">back</a></b>';
}
else
echo '<b>DELETE not possile for clients. SORRY....</b><b><a href="del.html">back</a></b>';	
?>