

<?php

   /*  if(!isset($_POST["msg"]))
		 $msg="";
	 else
	@$msg=@$_SERVER[REMOTE_ADDR]." : ".$_POST["msg"]."<br>";
*/
 //echo '<meta http-equiv="refresh" content="10" >';
	
	require "c_sess.html";
session_start();
$host="127.0.0.1";
$user="root";
$pass="";
$db="chat";
$come="***** has joined *****";
$left="***** has left *****";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,"chat");



	
	$post=$_POST["msg"];
	//if(!(isset($_POST["name"])) || $_POST["name"]=="" )
	if(!$_SESSION['nm'])
	{	
	$query="insert into hello_world values ('@$_SERVER[REMOTE_ADDR]','$post')  ";
	mysqli_query($conn,$query);
	}
	else{
		$nm=$_SESSION['nm'];
		$query="insert into hello_world values ('$nm','$post')  ";
	    mysqli_query($conn,$query);
	}







	








?>














