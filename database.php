<?php include "inc/header.php"; ?>


<?php 
// create connection
$connection = mysql_connect("localhost", "root", "root");
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// select database

$db_select = mysql_select_db("esteemengine", $connection);
if (!$db_select) {
	die("Databse selection failed: " . mysql_error());
}

?>

<html>
	<head>
		<title>Esteem Engine</title>
	</head>
	<body>
		<?php 
		$results = mysql_query("SELECT * FROM submissions", $connection);
		if (!$results) {
			die("Databse query failed: " . mysql_error());
		}

		while ($row = mysql_fetch_array($results)) {
			echo $row["content"]." ".$row["name"]."<br />";

		}

		?>
	</body>

</html>

<?php mysql_close($connection);
?>


<?php include "inc/footer.php"; ?>
