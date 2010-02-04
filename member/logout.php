<?php 
	session_start();
	session_unset();
	session_destroy(); 
	//delete from sessions where expireref = '$USER' ???
	header('Location: index.php');
?>
