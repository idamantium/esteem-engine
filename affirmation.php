<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>

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
	$query = "SELECT * FROM affirmations WHERE trigger_id = {$sel_trg}";
	$result_set = mysql_query($query, $connection);
	confirm_query($result_set);
	$trigger = mysql_fetch_array($result_set);

	echo "{$trigger['content']}<br />{$trigger['source']}";


	// $rand_trg = array_rand($trigger);
	// echo $trigger[$rand_keys];
}
	?>
<?php  ?>





<?php require ("inc/footer.php"); ?>