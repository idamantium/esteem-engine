<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>

<?php 


	$errors = array();
	if (!isset($_POST['username']) || empty($_POST['username'])) {
		$errors[] = 'username';
	}
	
	if (!isset($_POST['password']) || empty($_POST['password'])) {
		$errors[] = 'password';
	}
	if (!empty($errors)) {
		header("Location: index.php");
		exit;
	}

?>




<?php mysql_close($connection); ?>