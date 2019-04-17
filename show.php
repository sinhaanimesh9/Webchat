<html>




<body >
<?php
session_start();


	
echo '<meta http-equiv="refresh" content="1" >';



$host="127.0.0.1";
$user="root";
$pass="";
$db="chat";
$come="****comes*****";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,"chat");


$query1="select distinct ip,data from hello_world";
$res=mysqli_query($conn,$query1);
while($e=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	echo '<br><table style="width:500px "><tr><td>'.$e['ip'].' >></td><td>'.$e['data'].'</td></tr></table>';
}



?></body>
</html>