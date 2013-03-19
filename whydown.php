<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php include ("inc/header.php"); ?>

<ul>
		<?php 
		$all_triggers = mysql_query("SELECT * FROM triggers", $connection);
		if (!$all_triggers) {
			die("Databse query failed: " . mysql_error());
		}

		while ($trigger = mysql_fetch_array($all_triggers)) {
			echo "<li>" . $trigger["name"]." ".$trigger["text"]."</li>";
			

		}
		$trigger_link = mysql_query("SELECT * FROM affirmations WHERE trigger_id = {$trigger["id"]}", $connection);
			if (!$trigger_link) {
				die("Database query failed: " . mysql_error());
			}

		?>

	</ul>


<?php require ("inc/footer.php"); ?>