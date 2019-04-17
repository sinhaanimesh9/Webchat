<?php

$query="insert into hello_world values ('@$_SERVER[REMOTE_ADDR]','$post')  ";
	mysqli_query($conn,$query);
require "index_p.php";
?>