<?php
header('Content-Type: text/javascript; charset=utf8');
$result = array();

// prüfe tag und uhrzeit
if(isset($_REQUEST["tag"]))
{
	// lese freie tische aus der datenbank
	$result[1] = true;
	$result[2] = false;
	$result[3] = true;
	$result[4] = true;
	$result[5] = false;
	$result[6] = true;
	$result[7] = true;
}
echo json_encode($result);
?>