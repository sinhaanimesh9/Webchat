<html>

</html>
<?php
session_start();
if($_POST["pass"]==="123"  )
{
$_SESSION['nm']=$_POST['name'];
$_SESSION['host']="false";
echo 'YOU ARE NOW REGISTERED WITH <b> '.$_SESSION['nm'].'  </b> AS YOUR NAME';
echo '<br><br><a href="index_1.html">next</a></b>';
require "join.php";

}
else if($_POST["pass"]==="abcde"  )
{
$_SESSION['nm']=$_POST['name'];
$_SESSION['host']="true";
echo 'YOU ARE NOW REGISTERED WITH <b> '.$_SESSION['nm'].'  </b> AS YOUR NAME and You are !!HOST!!';
echo '<br><br><a href="index_1.html">next</a></b>';
require "join.php";

}
else
	echo 'password not correct or name not given <br><br><a href="index_2.html"> go back</a></b>';
	
?>