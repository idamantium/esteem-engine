<?php require_once("inc/functions.php"); ?>

<?php
	
	session_start();

	$_SESSION = array();

	if(isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-3000, '/');
	}

	session_destroy();

	header("Location: index.php?logout=1");
	exit;
?>

