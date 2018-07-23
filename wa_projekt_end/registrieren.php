<!DOCTYPE html>
<html>
	
	<head>
		<title>Selig Startseite</title>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Startseite">
		<meta name="date" content="2018-06-10 22:07:37">
	</head>

	<?php
		// Starten einer SESSION
		session_start();
		
		$mysqli = new mysqli("pc18.beuth-hochschule.de", "sose18_web_projekt_10", "projekt", "sose18_web_projekt_10");// DB-Objekt für MySQL, Server, Nutzername, Passwort, Datenbankname
				

		// Verbindung prüfen
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s<br/>", mysqli_connect_error());
			exit();
		}

		// **************************
		// SELECT/INSERT-Anfrage formulieren
		// **************************
		$username = $_REQUEST["E-Mail"];
		$name 	  = $_REQUEST["Name"];
		$password = $_REQUEST["Passwort"];
		$telefon  = $_REQUEST["Telefon"];
		$query1 = "SELECT * FROM Kunde
		WHERE email = '".$mysqli->real_escape_string($username)."'";

		// SELECT-Anfrage schicken
		if ($result = $mysqli->query($query1)) {
			// Zeilenanzahl ausgeben
			printf("Das ergab %d Zeilen.<br/>", $result->num_rows);

			if($result->num_rows > 0)
			{
				// Es gibt schon einen Kunden mit dieser E-Mail
				echo "Kunde existiert bereits!";
			}
			$result->close();
		}

		$query2 = "INSERT INTO Kunde(email,name,passwort,telefon)
					VALUES('".$mysqli->real_escape_string($username)."', '".$mysqli->real_escape_string($name)."',
					MD5('".$mysqli->real_escape_string($password)."'),'".$mysqli->real_escape_string($telefon)."')";

		
		
		// INSERT-Anfrage schicken
		if ($result = $mysqli->query($query2)) {
			
				printf("Kunde registriert");
		
		}

	?>

	<body>

		<script type="text/javascript">
		
			
			function toggle(divID)
			{
				var div = document.getElementById(divID);
				
				if(div)
				{
					if(div.style.display == "none")
						div.style.display = "block";
					else
						div.style.display = "none";
				}
			}
			
		</script>


		<!-- Menü Leiste -->
	<ul>
			<li><a href = "grundgeruest.php"> Startseite </a> </li>
			<li><a href = "speisekarte.php"> Speisekarte </a> </li>
			<li><a href = "reservierung.php"> Reservierung </a> </li>
			<li><a href = "team.php"> Team </a> </li>
			<li><a href = "kontakt.php"> Kontakt </a></li>
			<li><a href = "javascript:toggle('eingabeformular');"><img src="Bilder/worker.png"></a>
		</ul>


		<div id="eingabeformular" style="display:none;">
		
			<div id="hinweis">Bitte Einloggen</div>

			<form name="einTestFormular" action="login.php" method="GET">
			<input type="hidden" id="seite" name="seite" value="kontakt">
			<!-- hier folgen die Formularelemente -->
				<fieldset>
					<legend>Formular</legend>
					<table>
						<tr>
							<td><label for="email">E-Mail:</label></td>
							<td><input type="text" id="email" name="E-Mail" value="Ihre E-Mail"></td>
						</tr>
						<tr>
							<td><label for="passwort">Passwort:</label></td>
							<td><input type="text" id="passwort" name="Passwort" value="Ihr Passwort"></td>
						</tr>
						<tr>
							<td><label for="abschicken">Abschicken:</label></td>
							<td><input type="submit" id="abschicken" name="abschicken" value="OK"></td>
						</tr>
					</table>
					<a href = "registrieren.php"> Noch keinen Account? </a>
				</fieldset>
			</form>
		</div>

		<script type="text/javascript">
		
			// Funktion zur Überprüfung von Formularen
			function checkForm()
			{
				// Beispiel 1
				
				// Wert des Elementes mit ID "vorname" auslesen
				var vorname = document.getElementById("vorname").value;

				// Wert als Meldung zeigen
				alert("Bei Vorname steht " + vorname);
				
				// Beispiel 2

				// Ein bestimmtes Formular finden
				var form = document.einTestFormular;

				// Schleife über alle Elemente des Formulars
				for(i=0; element = document.einTestFormular[i]; i++)
				{
					// Falls checkbox: Muss geklickt sein
					if(element.type == "checkbox" && element.checked == false)
					{
						alert("Nicht alle Checkboxen angeklickt!");

						// Großvater vom Element rot färben
						element.parentNode.parentNode.setAttribute("class", "markiert");

						// Hinweistext ändern
						var hinweis= document.getElementById("hinweis");
						hinweis.innerHTML = "Bitte Formular <strong class=\"markiert\">richtig</strong> ausfüllen";
						
						// Formlar nicht abschicken
						return false;
					}
				}
				alert("OK, Formular wird abgeschickt!");
				return true;
			}

			
			
			
		</script>



		<div id="eingabeformular">
		
			<div id="hinweis">Bitte Formular ausfüllen</div>

			<form name="einTestFormular" action="registrieren.php" method="GET" onsubmit="return checkForm();">
			<!-- hier folgen die Formularelemente -->
				<fieldset>
					<legend>Formular</legend>
					<table>
						<tr>
							<td><label for="email">E-Mail:</label></td>
							<td><input type="text" id="email" name="E-Mail" value="Ihre E-Mail"></td>
						</tr>
						<tr>
							<td><label for="name">Name:</label></td>
							<td><input type="text" id="name" name="Name" value="Ihr Name"></td>
						</tr>
						<tr>
							<td><label for="passwort">Passwort:</label></td>
							<td><input type="text" id="passwort" name="Passwort" value="Ihr Passwort"></td>
						</tr>
						<tr>
							<td><label for="telefon">Telefon:</label></td>
							<td><input type="text" id="telefon" name="Telefon" value="Ihre Telefonnummer"></td>
						</tr>
						<tr>
							<td><label for="abschicken">Abschicken:</label></td>
							<td><input type="submit" id="abschicken" name="abschicken" value="OK"></td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>



	</body>


</html>