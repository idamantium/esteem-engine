<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>

<?php include ("inc/header.php"); ?>

<?php 

if (isset($_POST['login'])) {
	$errors = array();
	if (!isset($_POST['username']) || empty($_POST['username'])) {
		$errors[] = 'username';
	}
	
	if (!isset($_POST['password']) || empty($_POST['password'])) {
		$errors[] = 'password';
	}

	$username = mysql_real_escape_string($_POST['username']);
	$password =  mysql_real_escape_string($_POST['password']);
	$hashed_password = sha1($password);


	if (empty($errors)) {
		// echo $username $password $hashed_password;
		header("Location: whydown.php");
		exit;
		
	} else {
		header("Location: index.php");
		exit;
	}


} else {

	echo "error!";
}



//		$query = "SELECT * FROM users WHERE username = '{$username}' AND hashed_password = '{$hashed_password}'";
//		$result_set = mysql_query($query);
//		confirm_query($result_set);
//		if (mysql_num_rows($result_set) == 1) {
//			$found_user = mysql_fetch_array($result_set);
//			header("Location: whydown.php");
//			exit;
//
//		} else {
//			$message = "Username and password combination incorrect."
//		}
//	} else {
//		header("Location: index.php");
//		exit;
//	}


?>


<?php require ("inc/footer.php"); ?>
