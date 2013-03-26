<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>

<?php 

//Form Validation for Affirmation Submission
	$aff_errors = array();
	if (!isset($_POST['affirmation']) || empty($_POST['affirmation'])) {
		$aff_errors[] = 'affirmation';
	}

	if (!empty($aff_errors)) {
		header("Location: whydown.php");
		exit;

	}


?>



<?php mysql_close($connection); ?>