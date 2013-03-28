<?php ob_start(); ?>
<?php require("constants.php");
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// select database

$db_select = mysql_select_db(DB_NAME, $connection);
if (!$db_select) {
	die("Databse selection failed: " . mysql_error());
}
?>
<?php ob_end_flush(); ?>