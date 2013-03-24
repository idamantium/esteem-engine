
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php 
	$affirmation = $_POST['affirmation'];
	$trigger = $_POST['trigger'];
	$sub_name = $_POST['sub_name'];
	$email = $_POST['email'];

	echo "<p>These are the variables: {$affirmation}  {$trigger}  </p>";

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