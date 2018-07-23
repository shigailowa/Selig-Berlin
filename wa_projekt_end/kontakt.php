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


		<!-- Menü Leiste -->
	<!-- Menü Leiste -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="#">SELIG</a>
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
			<li><a href = "javascript:toggle('eingabeformular');"><img src="Bilder/worker.png"></a></li>
		</ul>



		<div id="eingabeformular" style="display:none;">
		
			<div id="hinweis">Bitte Einloggen</div>

			<form name="einTestFormular" action="login.php" method="GET">
			<input type="hidden" id="seite" name="seite" value="team">
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

<section id="section">
	<div class="container-fluid no-padding">
		<div class="row">
			<div class="col-md-6 my-3 align-self-center">
				<div class="embed-responsive embed-responsive-21by9 height-60">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.2413564860344!2d13.290440850990175!3d52.51097104455228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a850d78d3e294f%3A0x67ba8b965f17e0d9!2sKaiserdamm+6%2C+14057+Berlin!5e0!3m2!1sde!2sde!4v1532295546999" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
			</div>
		</div>
		<div class="col-md-6 my-3">
			<div class="card text-center">
				<div class="card-header">
					<h1 class="text-uppercase">contact list</h1>
				</div>
				<div class="card-body">
					<form>
<!---   '''''INPUT GROUP---->
					<div class="input-group my-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="input-text">
								<i class="fas fa-user"></i>
							</span>
							
						</div>
						<input type="text" id="text" class="form-control form-control-lg" placeholder="Enter your name here">
					</div>

					<div class="input-group my-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="input-phone">
								<i class="fas fa-phone"></i>
							</span>
							
						</div>
						<input type="text" id="phone" class="form-control form-control-lg" placeholder="Enter your phone here">
					</div>

					<div class="input-group my-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="input-text">
								<i class="fas fa-envelope"></i>
							</span>
							
						</div>
						<input type="email" id="text" class="form-control form-control-lg" placeholder="Enter your email here">
					</div>

					<button type="submit" class="btn btn-block btn-lg text-uppercase"><i class="far fa-hand-point-right mr-2"></i>click here</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- end of contact section-->

<!-- social Icons -->
	<div class="container-fluid info p-3" >
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