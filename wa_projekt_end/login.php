<?php

			// Starten einer SESSION
			session_start();
			/*
			wir wollen in der Variable $_SESSION['loginOK'] speichern, ob Login schon erfolgreich
			wir wollen in der Variable $_SESSION['loginUsername'] speichern, welcher Nutzer eingeloggt ist
			*/


			// keine Info verfügbar, ob Login erfolgreich => also nicht eingeloggt
			if (empty($_SESSION['loginOK']))
			{
				$_SESSION['loginOK'] = false;
				$_SESSION['loginUsername'] = "";	
			}


			// Wurden Login-Daten übertragen?
			if(isset($_REQUEST["E-Mail"]) && isset($_REQUEST["Passwort"]))
			{
				$mysqli = new mysqli("pc18.beuth-hochschule.de", "sose18_web_projekt_10", "projekt", "sose18_web_projekt_10");// DB-Objekt für MySQL, Server, Nutzername, Passwort, Datenbankname
				

				// Verbindung prüfen
				if (mysqli_connect_errno()) {
					printf("Connect failed: %s<br/>", mysqli_connect_error());
					exit();
				}

				// **************************
				// SELECT-Anfrage formulieren
				// **************************
				$username = $_REQUEST["E-Mail"];
				$password = $_REQUEST["Passwort"];
				$query = "SELECT * FROM Kunde
				WHERE email = '".$mysqli->real_escape_string($username)."' AND passwort = MD5('".$mysqli->real_escape_string($password)."')";


				// SELECT-Anfrage schicken
				if ($result = $mysqli->query($query)) {
					// Zeilenanzahl ausgeben

					if($result->num_rows > 0)
					{
						// Es gibt einen Datensatz, also Login korrekt
						$_SESSION['loginOK'] = true;
						$_SESSION['loginUsername'] = $username;
					}

					$result->close();
				}


				// Verbindung beenden
				$mysqli->close();
			}

			if (isset($_REQUEST["ausloggen"])) {
				$_SESSION['loginOK'] = false;
			}

		if(isset($_REQUEST["seite"])) {
			include $_REQUEST["seite"].".php";
		}

?>