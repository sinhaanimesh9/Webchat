<?php

$host="127.0.0.1";
$user="root";
$pass="";
$db="chat";
$come="***** has joined *****";
$left="***** has left *****";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,"chat");


	if($_SESSION['nm']==='')
		$nm=@$_SERVER[REMOTE_ADDR];
	else
		$nm=$_SESSION['nm'];
	
		$query="insert into hello_world values ('$nm','$come')  ";
	    mysqli_query($conn,$query);


?>