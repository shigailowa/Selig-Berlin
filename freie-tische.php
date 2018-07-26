<?php
header('Content-Type: text/javascript; charset=utf8');
$result = array();

// prüfe tag und uhrzeit
if(isset($_REQUEST["tag"]) && isset($_REQUEST["zeit"]))
{

	$mysqli = new mysqli("pc18.beuth-hochschule.de", "sose18_web_projekt_10", "projekt", "sose18_web_projekt_10");// DB-Objekt für MySQL, Server, Nutzername, Passwort, Datenbankname
				

		// Verbindung prüfen
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s<br/>", mysqli_connect_error());
			exit();
		}

	// lese freie tische aus der datenbank
	$result[1] = true;
	$result[2] = true;
	$result[3] = true;
	$result[4] = true;
	$result[5] = true;
	$result[6] = true;
	$result[7] = true;

	$query = "SELECT fuer.Tisch_id_tisch from reservierung join fuer on reservierung.id_reservierung = fuer.Reservierung_id_reservierung 
	WHERE date_format(datum, '%m/%d/%Y') = '".$mysqli->real_escape_string($_REQUEST["tag"])."' AND 
	TIME(datum) = CONCAT('".$mysqli->real_escape_string($_REQUEST["zeit"])."', ':00')";

	if ($query_result = $mysqli->query($query)) {

		if($query_result->num_rows > 0) {
			while ($row = $query_result->fetch_assoc()) {
    			$result[$row['Tisch_id_tisch']] = false;
			}

		}
	}
}
echo json_encode($result);
?>