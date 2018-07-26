<?php
	include_once "login.php";
?>
<?php

		// Starten einer SESSION
		//include_once "login.php";
		$mysqli = new mysqli("pc18.beuth-hochschule.de", "sose18_web_projekt_10", "projekt", "sose18_web_projekt_10");// DB-Objekt für MySQL, Server, Nutzername, Passwort, Datenbankname
				

		// Verbindung prüfen
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s<br/>", mysqli_connect_error());
			exit();
		}

		// **************************
		// SELECT/INSERT-Anfrage formulieren
		// **************************
		if (isset($_REQUEST["E-Mail"]) and isset($_REQUEST["Name"]) and isset($_REQUEST["Passwort"]) and isset($_REQUEST["Telefon"])){
		$username = $_REQUEST["E-Mail"];
		$name 	  = $_REQUEST["Name"];
		$password = $_REQUEST["Passwort"];
		$telefon  = $_REQUEST["Telefon"];
		$query1 = "SELECT * FROM Kunde
		WHERE email = '".$mysqli->real_escape_string($username)."'";

		// SELECT-Anfrage schicken
		if ($result = $mysqli->query($query1)) {
			// Zeilenanzahl ausgeben
	

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
			
		}}

	?>


<!DOCTYPE html>
<html>
	
	<head>
		<title>Selig Startseite</title>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Startseite">
		<meta name="date" content="2018-06-10 22:07:37">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- main css -->
		<link rel="stylesheet"  href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" href="magnific-popup/magnific-popup.css">
	
		<!--Font awesome -->
		<script src="js/all.js"></script>
	</head>

	<body>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="magnific-popup/jquery.magnific-popup.js"></script>
		<script src="js/script.js"></script>
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



			<!-- Menü Leiste navbar-expand-md navbar-dark bg-dark -->

				<!-- Menü Leiste -->
		<!--Navbar-->
<nav class="navbar navbar-expand-lg sticky-top">
	<h2 class="text-uppercase secondary-color">SELIG</h2>
	<button class="navbar-toggler secondary-color" type="button" data-toggle="collapse" data-target="#myNavbar">
		<div class="toggler-btn secondary-color">
			<div class="bar secondary-color"></div>
			<div class="bar secondary-color"></div>
			<div class="bar secondary-color"></div>
		</div>
	</button>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item"><a class="nav-link secondary-color" href = "grundgeruest.php"> Startseite </a> </li>
			<li class="nav-item"><a class="nav-link secondary-color" href = "speisekarte.php"> Speisekarte </a> </li>
			<li class="nav-item"><a class="nav-link secondary-color" href = "pre_reservierung.php"> Reservierung </a> </li>
			<li class="nav-item"><a class="nav-link secondary-color" href = "team.php"> Team </a> </li>
			<li class="nav-item"><a class="nav-link secondary-color" href = "kontakt.php"> Kontakt </a></li>
			<li><a href = "javascript:toggle('eingabeformular');"><img src="Bilder/login.png" id = "loginmann"></a></li>
		</ul>


<?php
			if ($_SESSION['loginOK'] == false) {
			?>
		<div id="eingabeformular" style="display:none;">
		<div class="card text-center secondary-color">
			<div class="card-header text-uppercase">
			<form name="einTestFormular" action="login.php" method="GET">
			<input type="hidden" id="seite" name="seite" value="grundgeruest">
			<!-- hier folgen die Formularelemente -->
				<fieldset>
					<table>
						<tr>
							<td><label for="email" class="secondary-color">E-Mail:</label></td>
							<td><input type="text" id="email" name="E-Mail" placeholder ="Ihre E-Mail"></td>
						</tr>
						<tr>
							<td><label for="passwort" class="secondary-color">Passwort:</label></td>
							<td><input type="password" class="secondary-color" id="passwort" name="Passwort" placeholder ="Ihr Passwort"></td>
						</tr>
						<tr>
							<td><label for="abschicken" class="secondary-color">Abschicken:</label></td>
							<td><input type="submit" id="abschicken" name="abschicken" value="OK"></td>
						</tr>
					</table>
					<a href = "registrieren.php"> Noch keinen Account? </a>
				</fieldset>
			</form>
		</div>
	</div>
</div>
		<?php
		}
		else {
		?>
		<form name="einTestFormular" action="login.php" method="GET">
		<input type="hidden" id="seite" name="seite" value="reservierung">
		<div id="eingabeformular" style="display:none;">
			<input type="submit" id="abschicken" name="ausloggen" value="Ausloggen">
		</div> </form>
		<?php
		}
		?>
	</div>
</div>
</nav>
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
			<div class="card text-center">
			<div class="card-header text-uppercase">
			<div id="hinweis" class="secondary-color"><h1>Bitte Formular ausfüllen</h1></div>
			</div>
			<div class="card-body">
			<form name="einTestFormular" action="registrieren.php" method="GET" onsubmit="return checkForm();">
			<!-- hier folgen die Formularelemente -->
				<fieldset>
					<!--<legend>Formular</legend>-->
					<table>
						<tr>
							<td><label for="email" class="secondary-color"><h2>E-Mail:</h2></label></td>
							<td><input type="text" id="email" class="form-control-lg" name="E-Mail" placeholder="Ihre E-Mail"></td>
						</tr>
						<tr>
							<td><label for="name" class="secondary-color"><h2>Name:</h2></label></td>
							<td><input type="text" id="name" class="form-control-lg" name="Name" placeholder="Ihr Name"></td>
						</tr>
						<tr>
							<td><label for="passwort" class="secondary-color"><h2>Passwort:</h2></label></td>
							<td><input type="password" id="passwort" class="form-control-lg" name="Passwort" placeholder="Ihr Passwort"></td>
						</tr>
						<tr>
							<td><label for="telefon" class="secondary-color"><h2>Telefon:</h2></label></td>
							<td><input type="text" id="telefon" class="form-control-lg" name="Telefon" placeholder="Telefonnummer"></td>
						</tr>
						<tr>
							<td><label for="abschicken" class="secondary-color"><h2>Abschicken:</h2></label></td>
							<td><input button type="submit" id="abschicken" class="btn btn-block btn-lg text-uppercase" name="abschicken" value="OK"></td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
		</div>
		</div>


	



<!-- social Icons -->
	<div class="container-fluid fixed-bottom info p-3" >
		<div class="row">
			<div class="col d-flex justify-content-between align-items-baseline flex-wrap ">
				<div class="info-icons p-2">

					<a href="#" class="mr-2 secondary-color"><i class="fab fa-facebook fa-2x"></i></a><a href="#" class="mr-2 secondary-color"> <i class="fab fa-instagram fa-2x"></i></a><a href="#" class="mr-2 secondary-color"><i class="fab fa-twitter fa-2x"></i></a><a href="#" class="mr-2 secondary-color"><i class="fab fa-yelp fa-2x"></i></a> 
				</div>
				<h2 class="primary-color p-2 text-uppercase">&copy;copyright 2018</h2>
			</div>

			<!--<a href="#"><i class="fas fa-home"></i></a>-->
		</div>
		
	</div>

	</body>


</html>