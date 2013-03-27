
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>
<?php include ("inc/header.php"); ?>

		<section id="submit">
			<hr></hr>

		<div id="form">
			<form action="submit_affirmation.php" method="post">
				<p>Submit An Affirmation For Ida's Esteem Engine: <br />
					<textarea name="affirmation" rows="10" cols="50"value="" id="affirmation" /></textarea>
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
				<p> You can send me a thank you note at this email address (optional): <br /><input type="email" name="email" value="" id="email" />
				<p><input type="submit" value="Submit Affirmation" /></p>
			</form>

		</div>


		</section>

		<section id="login">
			<hr></hr>
			Have we met? This is where the login goes.
			<form action="login.php" method="post">
				<p> Username: <input type="text" name="username" value="" id="username" /></p>
				<p> Password: <input type="password" name="password" value="" id="password" /></p>
				<p><input type="submit" name="login" value="Onward!" /></p>
			</form>


		</section>
		<hr></hr>
		<h3> For Testing </h3>
		<ul>

		<li><a href="whydown.php"> Pick why you're feeling down </a></li>
		<li><a href="affirmation.php"> An Affirmation </a></li>
		<li><a href="feelingbetter.php"> How was that? </a></li>

		</ul>

<?php require ("inc/footer.php"); ?>
