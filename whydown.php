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


<ul>
		<?php 

		$query = "SELECT * 
				  FROM triggers";

		$all_triggers = mysql_query($query, $connection);
		confirm_query ($all_triggers);


		while ($trigger = mysql_fetch_array($all_triggers)) {
			echo "<li><a href=\"affirmation.php?trg=" . urlencode($trigger["ID"]) . "\">
				{$trigger["name"]} </a> {$trigger["text"]}</li>";
			$query = "SELECT * 
					  FROM affirmations 
					  WHERE trigger_id = {$trigger["ID"]}";

			$affirmation_set = mysql_query($query, $connection);
			confirm_query ($affirmation_set);



			echo "<ul>";
			while ($affirmation = mysql_fetch_array($affirmation_set)) {
				echo "<li>{$affirmation["content"]}</li>";

			}	
			echo "</ul>";	

		}

		?>

</ul>
<div>
<?php echo $sel_trg; ?><br />
<?php
	if ($sel_trg != "") {
	$query = "SELECT * FROM affirmations WHERE trigger_id = {$sel_trg} LIMIT 1";
	$result_set = mysql_query($query, $connection);
	confirm_query($result_set);
	$trigger = mysql_fetch_array($result_set);
	echo $trigger['content'];
}
	?>
<?php  ?>
</div>

<p><a href="logout.php">Logout</a></p>


<?php require ("inc/footer.php"); ?>