
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php include ("inc/header.php"); ?>

		<section id="submit">
<?php 
		//$results = mysql_query("SELECT * FROM submissions", $connection);
		//if (!$results) {
		//	die("Databse query failed: " . mysql_error());
		//}
		//
		//while ($row = mysql_fetch_array($results)) {
		//	echo $row["content"]." ".$row["name"]."<br />";
		//
		//}

		?>


		Submit something genuine and supportive for Ida to include in her personal Esteem Engine. She'll be sure to thank you for it when it helps her lift her chin up!

		<div id="form">
			<form action="thankyou.php" method="post">
				<p>Affirmation: 
					<input type="text" name="affirmation" value="" id="affirmation" />
				</p>

				<p>Trigger:

			<!--  THIS PART SHOULD BE A MySQL QUERY -->

					<select name="trigger">
						<option value="Feeling Invisible">Feeling Invisible</option>
						<option value="Not Good Enough">Not Good Enough</option>
						<option value="No One REspects Me">No One Respects Me</option>
						<option value="Everyone's Working Against Me">Working Against Me</options>
						<option value="Other / Not Sure">Other / Not Sure</options>
					</select>

				<p> My Name Is: <input type="text" name="sub_name" value="" id="sub_name" /></p>
				<p> You can send me a thank you note at this email address: <input type="text" name="email" value="" id="email" />
				<p><input type="submit" value="Send Affirmation" /></p>

		</div>


		</section>

		<section id="login">
		Have we met?

		</section>

		<h3> For Testing </h3>
		<ul>

		<li><a href="whydown.php"> Pick why you're feeling down </a></li>
		<li><a href="affirmation.php"> An Affirmation </a></li>
		<li><a href="feelingbetter.php"> How was that? </a></li>

		</ul>

<?php require ("inc/footer.php"); ?>
