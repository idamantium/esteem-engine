
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php include ("inc/header.php"); ?>

		<section id="submit">


		Submit something genuine and supportive for Ida to include in her personal Esteem Engine. She'll be sure to thank you for it when it helps her lift her chin up!

		<div id="form">
			<form action="submit_affirmation.php" method="post">
				<p>Affirmation: 
					<input type="text" name="affirmation" value="" id="affirmation" />
				</p>

				<p>Trigger:

					<select name="trigger">
								<?php 

								$query = "SELECT * 
										  FROM triggers";
						
								$all_triggers = mysql_query($query, $connection);
								confirm_query ($all_triggers);
						
						
								while ($trigger = mysql_fetch_array($all_triggers)) {
									echo "<option value=\"{$trigger["name"]}\">{$trigger["name"]}</option>";
									
						
								}
						
								?>
								
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
