<?php

function confirm_query($result) {
	if (!$result) {
				die("Database query failed: " . mysql_error());
			}	
}


function get_trigger_by_id($trigger_id) {
	global $connection;
	$query = "SELECT * FROM affirmations WHERE trigger_id = {$trigger_id} LIMIT 1";
	$result_set = mysql_query($query, $connection);
	confirm_query($result_set);
	if ($trigger = mysql_fetch_array($result_set)){
		return $trigger;
	} else {
		return NULL;
	}
}


?>


	
	
