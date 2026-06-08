<?php 
	// check if session isn't started
	if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	
	// initialize classes
	require_once('../app/init.php');

	// create instance/object from class
	$app = new App(); 
?>