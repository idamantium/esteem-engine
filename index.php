
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php include ("inc/header.php"); ?>

		<section id="submit">
<?php 
		$results = mysql_query("SELECT * FROM submissions", $connection);
		if (!$results) {
			die("Databse query failed: " . mysql_error());
		}

		while ($row = mysql_fetch_array($results)) {
			echo $row["content"]." ".$row["name"]."<br />";

		}

		?>


		Submit something genuine and supportive for Ida to include in her personal Esteem Engine. She'll be sure to thank you for it when it helps her lift her chin up!
		<div id="form">

		</div>
		</section>

		<section id="login">
		Have we met?

		</section>

		<h3> For Testing </h3>
		<ul>

		<li><a href="whydown.php"> Pick why you're feeling down </a></li>
		<li><a href="affirmations.php"> An Affirmation </a></li>
		<li><a href="feelingbetter.php"> How was that? </a></li>

		</ul>

<?php require ("inc/footer.php"); ?>
