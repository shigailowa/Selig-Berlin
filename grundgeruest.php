<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Selig Startseite</title>
		<!--Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- main css -->
		<link rel="stylesheet"  href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	
		<!--Font awesome -->
		<script src="js/all.js"></script>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Startseite">
		<meta name="date" content="2018-06-10 22:07:37">	</head>

	<body>
	<!-- social Icons -->
	<div class="container-fluid info p-3" id="top-icons">
		<div class="row">
			<div class="col d-flex justify-content-between align-items-baseline flex-wrap ">
				<div class="info-icons p-2">

					<a href="#" class="mr-2 secondary-color"><i class="fab fa-facebook fa-2x"></i></a><a href="#" class="mr-2 secondary-color"> <i class="fab fa-instagram fa-2x"></i></a><a href="#" class="mr-2 secondary-color"><i class="fab fa-twitter fa-2x"></i></a><a href="#" class="mr-2 secondary-color"><i class="fab fa-yelp fa-2x"></i></a> 
				</div>
				<h2 class="primary-color p-2 text-capitalize">Kaiserdamm 6, Berlin, 14057</h2>
			</div>

			<!--<a href="#"><i class="fas fa-home"></i></a>-->
		</div>
	</div>
<!-- end of social icons -->
<!-- header section -->
<header id="header">
	<div class="container">
		<div class="row height-90 align-items-center justify-content-center">
			<div class="col">
				<div class="banner text-center">
					<h1 class="display-1 text-capitalize w-50 mx-auto">
						<small class="secondary-color">Selig</small>
					</h1>
					<a href="" class="main-btn">reservieren</a>
				</div>
			</div>			
		</div>
	</div>

 	<a href="#special-items" class="btn header-link secondary-color"></button><i class="fas fa-arrow-down"></i></a>
	

</header>
<!-- end of header section -->



	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min"></script>
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
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src"Bilder/logo.png"></a>
	<button class="navbar-toogler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toogler-icon"></span>
	</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active"><a class="nav-link" href = "grundgeruest.html"> Startseite </a> </li>
			<li class="nav-item"><a class="nav-link" href = "speisekarte.html"> Speisekarte </a> </li>
			<li class="nav-item"><a class="nav-link" href = "reservierung.html"> Reservierung </a> </li>
			<li class="nav-item"><a class="nav-link" href = "team.html"> Team </a> </li>
			<li class="nav-item"><a class="nav-link" href = "kontakt.html"> Kontakt </a></li>
			<li class="nav-item"><a class="nav-link" href = "login.html"> <img src="worker.png"></a></li>
			<li><a href = "javascript:toggle('eingabeformular');"><img src="Bilder/worker.png"></a></li>
		</ul>


		


		<div id="eingabeformular" style="display:none;">
		
			<div id="hinweis">Bitte Einloggen</div>

			<form name="einTestFormular" action="login.php" method="GET">
			<input type="hidden" id="seite" name="seite" value="grundgeruest">
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
	</div>
</div>
</nav>
		
		<!--<h1>SELIG</h1>
		<div id = "titelbild"><img src = "Bilder/selig_titelbild.jpg"> </div>-->

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
<div class="carousel-inner">
	<div class="carousel-item active">	
		<img src="Bilder/Selig-Berlin-Scharfe-Geschosse-Chicken-1000x350.jpg"></div>
		<div class="carousel-caption"></div>
		<div class="carousel-item">
			<img src="Bilder/Selig-Berlin-Crab-New-Year-Cake-1000x350.jpg">
		</div>
			<div class="carousel-item">
			<img src="Bilder/Selig-Berlin-Noodles-with-Rindergulasch-1000x350.jpg">
		</div>
</div>
</div>
	</body>

</html>