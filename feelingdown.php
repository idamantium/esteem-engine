<?php require_once("inc/session.php"); ?>
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php if (!isset($_SESSION['user_id'])) {
	header("Location: index.php");
		exit;
}
?>
<?php include ("inc/header.php"); ?>

<?php
if (isset($_POST['down_form'])) {
	$errors = array();
	if (!isset($_POST['feelings']) || empty($_POST['feelings'])) {
		$errors[] = 'feelings';
	}
	
	$feelings = mysql_real_escape_string($_POST['feelings']);


	if (empty($errors)) {
	
	// ADD TO DATABASE

			header("Location: whydown.php");
			exit;
		} else {
			$message = "Something affirmative to get you to submit something...";

		}


$feelings = "";
}

?>


		<div id="form">
			<form action="feelingdown.php" method="post">
				<p>What's getting you down? <br />
					<textarea name="feelings" rows="10" cols="50" value="" id="feelings" /></textarea>
				</p>
				<?php if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>

				<p><input type="submit" name="down_form" value="Send It Away" /></p>
			</form>

		</div>




<p><a href="logout.php">Logout</a></p>


<?php require ("inc/footer.php"); ?>