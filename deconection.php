<?php
//unset($_SESSION['user_name']);
//unset($_SESSION['user_uid']);
//unset($_SESSION['user_img']);
//unset($_SESSION['email']);
//unset($_SESSION);
	$_SESSION = array();
	session_destroy();
	header('location: index.php');
?>