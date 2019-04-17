<?php
session_start();
$_SESSION['nm']=$_POST["name"];
echo 'YOU ARE NOW <b>REGISTERED</b>WITH '.$_SESSION['nm'].'AS YOUR NAME';
echo '<br><br><a href="index_p.php">back</a></b>';
?>