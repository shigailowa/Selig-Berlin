<?php
session_start();
?>

<!DOCTYPE html>

<html>

<?php

	if(isset($_REQUEST["tag"]) && isset($_REQUEST["zeit"]) && isset($_REQUEST["tisch"])) {


		$mysqli = new mysqli("pc18.beuth-hochschule.de", "sose18_web_projekt_10", "projekt", "sose18_web_projekt_10");
		// Verbindung prüfen
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s<br/>", mysqli_connect_error());
			exit();
		}

		// **************************
		// INSERT-Anfrage formulieren
		// **************************
		$tag = $_REQUEST["tag"];
		$zeit = $_REQUEST["zeit"];
		$tisch = $_REQUEST["tisch"];
		$username = $_SESSION["loginUsername"];

		$query1 = "INSERT INTO Reservierung(datum, kunde_email)
					VALUES(CONCAT(SUBSTR('".$mysqli->real_escape_string($tag)."',7,4),
					'-', SUBSTR('".$mysqli->real_escape_string($tag)."',1,2), '-',
					SUBSTR('".$mysqli->real_escape_string($tag)."',4,2), ' ',
					'".$mysqli->real_escape_string($zeit)."', ':00'), '".$mysqli->real_escape_string($username)."')";
	
		$query2 = "INSERT INTO fuer(reservierung_id_reservierung, tisch_id_tisch)
					VALUES(LAST_INSERT_ID(),'".$mysqli->real_escape_string($tisch)."')";

		// INSERT-Anfrage schicken
		if ($result = $mysqli->query($query1)) {
				printf("");
		}
		if ($result = $mysqli->query($query2)) {
				printf("");
		}

	}


?>

<div> Tisch erfolgreich reserviert!</div>

</html>