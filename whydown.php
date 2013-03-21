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
			echo "<li>{$trigger["name"]}  {$trigger["text"]}</li>";
			$affirmation_set = mysql_query("SELECT * FROM affirmations WHERE trigger_id = {$trigger["ID"]}", $connection);
			if (!$affirmation_set) {
				die("Database query failed: " . mysql_error());
			}	

			echo "<ul>";
			while ($affirmation = mysql_fetch_array($affirmation_set)) {
				echo "<li>{$affirmation["content"]}</li>";

			}	
			echo "</ul>";	

		}

		?>

	</ul>


<?php require ("inc/footer.php"); ?>