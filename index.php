
<?php require_once("inc/session.php"); ?>
<?php require_once("inc/connection.php"); ?>
<?php require_once("inc/functions.php"); ?>

<?php include ("inc/header.php"); ?>
<p>

This little application serves up personal affirmations and lost memories of victory. It's handy for when I've forgotten what I'm worth.
</p>
		<section id="submit">
			<hr></hr>

		<div id="form">
			<form action="submit_affirmation.php" method="post">
				<h3>Contribute an affirmation to Ida's Esteem Engine </h3>
				<p>I'd love your help in defeating the monsters of self-doubt.  <br />
					<br />Examples of things to contribute:<br />
					- A personal enecdote about working together <br />
					- A loving piece of advice <br />
					- A description of something I might not know I'm awesome at<br />
					- A humerous description of something I suck is of no real consequence<br />
					  (The more specific you can be, the better.)
					<br /><textarea name="affirmation" rows="10" cols="50"value="" id="affirmation" /></textarea>
				</p>

				<p>What ugly myth does this affirmation put to rest?<br />

					<select name="trigger">
						<option value="Other / Not Sure">Not Sure / Other</options> 
								<?php 

								$query = "SELECT * 
										  FROM triggers";
						
								$all_triggers = mysql_query($query, $connection);
								confirm_query ($all_triggers);
						
						
								while ($trigger = mysql_fetch_array($all_triggers)) {
									echo "<option value=\"{$trigger["name"]}\">{$trigger["name"]}</option>";
									
						
								}
						
								?>

						
					</select>

				<p> Your Name (optional) <br /><input type="text" name="sub_name" value="" id="sub_name" /></p>
				<p> Your email address for a personal thank you note (optional) <br /><input type="email" name="email" value="" id="email" /> <br /></p>
				<p><input type="submit" value="Submit Affirmation" /></p>
				<?php if(isset($_GET['aff'])) {
					if ($_GET['aff'] == 1) {
						echo "<p class=\"message\">Please include an affirmation. Everything else is optional.</p>";
					}
				}
						?>
			</form>

		</div>


		</section>


<?php
if (isset($_POST['login'])) {
	$errors = array();
	if (!isset($_POST['username']) || empty($_POST['username'])) {
		$errors[] = 'username';
	}
	
	if (!isset($_POST['password']) || empty($_POST['password'])) {
		$errors[] = 'password';
	}

	$username = mysql_real_escape_string($_POST['username']);
	$password =  mysql_real_escape_string($_POST['password']);
	$hashed_password = sha1($password);


	if (empty($errors)) {
		$query = "SELECT username, id FROM users WHERE username = '{$username}' AND hashed_password = '{$hashed_password}'";
		$result_set = mysql_query($query);
		confirm_query($result_set);
		if (mysql_num_rows($result_set) == 1) {
			$found_user = mysql_fetch_array($result_set);
			$_SESSION['user_id'] = $found_user['id'];
			$_SESSION['username'] = $found_user['username'];


			header("Location: whydown.php");
			exit;
		} else {
			$message = "The username and password combination was not found.";

		}

	} else {
		$message = "The username and password combination was not found.";

	}


} else {
	if(isset($_GET['logout']) && $_GET['logout'] == 1) {
		$message = "You are now logged out.";
	}
$username = "";
$password = "";
}

?>

		<section id="login">
			<hr></hr>
			Have we met?
			<?php if (!isset($_SESSION['user_id'])) {
				?>
			<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
			<form action="index.php" method="post">
				<p> Username: <input type="text" name="username" value="" id="username" /></p>
				<p> Password: <input type="password" name="password" value="" id="password" /></p>
				<p><input type="submit" name="login" value="Let me in!" /></p>
			</form>
			<?php
				} else {
			?>
			Yes, go get an <a href="whydown.php">affiramtion</a> or <a href="logout.php">logout</a></p>.
			<?php
			}
			?>
			


		</section>
		<hr></hr>
<!--		<h3> For Testing </h3>
		<ul>

		<li><a href="whydown.php"> Pick why you're feeling down </a></li>
		<li><a href="affirmation.php"> An Affirmation </a></li>
		<li><a href="feelingbetter.php"> How was that? </a></li>

		</ul> 


<?php require ("inc/footer.php"); ?>
