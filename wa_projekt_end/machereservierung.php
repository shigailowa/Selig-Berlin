<?php
include_once "login.php";
?>

<!DOCTYPE html>



<html>

<head>
		<title>Selig Kontakt</title>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Kontakt">
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

				<!-- Menü Leiste -->
	<!-- Menü Leiste -->
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
							<td><label for="passwort">Passwort:</label></td>
							<td><input type="password" id="passwort" name="Passwort" placeholder ="Ihr Passwort"></td>
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

<div class = "text-center secondary-color font-weight-bold py-5"> <h1>Tisch erfolgreich reserviert!</h1></div>
<div class = "container justify-content-center p-2"> <img src = "Bilder/selig_tisch.jpg"  height="480px" width="720px" class="rounded mx-auto d-block" > </div>

<!-- social Icons -->
	<div class="container-fluid fixed-bottom info p-3" >
		<div class="row">
			<div class="col d-flex justify-content-between align-items-baseline flex-wrap ">
				<div class="info-icons p-2">

					<a href="https://www.facebook.com/selig1688/" class="mr-2 secondary-color"><i class="fab fa-facebook fa-2x"></i></a><a href="https://www.instagram.com/explore/locations/613185649/selig-restaurant/" class="mr-2 secondary-color"> <i class="fab fa-instagram fa-2x"></i></a><a href="https://www.yelp.de/biz/selig-berlin
" class="mr-2 secondary-color"><i class="fab fa-yelp fa-2x"></i></a> 
				</div>
				<h2 class="primary-color p-2 text-uppercase">&copy;copyright 2018</h2>
			</div>

			<!--<a href="#"><i class="fas fa-home"></i></a>-->
		</div>
	</div>


</body>

</html>