
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>

<?php 
	$errors = array();
	if (!isset($_POST['affirmation']) || empty($_POST['affirmation'])) {
		$errors[] = 'affirmation';
	
	}
	if (!empty($errors)) {
		header("Location: index.php?aff=1");
		exit;
	}

?>

<?php 
	$affirmation = mysql_real_escape_string($_POST['affirmation']);
	$trigger =  mysql_real_escape_string($_POST['trigger']);
	$sub_name =  mysql_real_escape_string($_POST['sub_name']);
	$email =  mysql_real_escape_string($_POST['email']);

	

?>
<?php 
	$query = "INSERT INTO submissions (
				content, `trigger`, name, contact
			) VALUES (
				'{$affirmation}', '{$trigger}', '{$sub_name}', '{$email}'
			)";
	if (mysql_query($query, $connection)) {
		header("Location: thankyou.php");
		exit;

	} else {
		echo "<p>Affirmation Creation Failed!</p>";
		echo "<p>" . mysql_error() . "</p>";
	}


?>



<?php mysql_close($connection); ?>