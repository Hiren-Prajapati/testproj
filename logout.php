<?php 

	include('include/config.php');
	unset($_SESSION['yamunaPathologyUser']);
	session_destroy();
	header("location:index.php");exit;

?>