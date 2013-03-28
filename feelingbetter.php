<?php require_once("inc/session.php"); ?>
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php if (!isset($_SESSION['user_id'])) {
	header("Location: index.php");
		exit;
}
?>



<p><a href="logout.php">Logout</a></p>

<?php require ("inc/footer.php"); ?>