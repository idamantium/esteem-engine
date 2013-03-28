<?php require_once("inc/session.php"); ?>
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php if (!isset($_SESSION['user_id'])) {
	header("Location: index.php");
		exit;
}
?>

<?php 
	if(isset($_GET['trg'])) {
		$sel_trg = $_GET['trg'];

	} else {

		$sel_trg = "";
	}

?>

<?php include ("inc/header.php"); ?>


<?php //echo $sel_trg; ?><br />
<?php
	if ($sel_trg != "") {
	$query = "SELECT * FROM affirmations WHERE trigger_id = {$sel_trg} ORDER BY RAND()";
	$result_set = mysql_query($query, $connection);
	confirm_query($result_set);

	$trigger = mysql_fetch_array($result_set);
	echo $trigger['content'] . "<br />" . $trigger['source'];
	if($trigger['contact'] != NULL) {
		echo "<a href=\"mailto:" . $trigger['contact'] . "\"><p>Email " . $trigger['source'] . "to thank them for the awesome affrimation.</p></a>"; 
	}


	// $rand_trg = array_rand($trigger);
	// echo $trigger[$rand_keys];
}
	?>
<?php  ?>


<p><a href="logout.php">Logout</a></p>

<?php require ("inc/footer.php"); ?>