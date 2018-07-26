<?php
	include_once "login.php";
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>Selig Team</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet"  href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Team">
		<meta name="date" content="2018-06-10 22:07:37">

	</head>

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
<!-- team -->
<section id="team" class="py-5">
	<div class="container">
		<div class="row">
			<!-- team member -->
			<div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
				<div class="card">
					<img src="Bilder/dude.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">Dude Bearded</h1>
						</div>
						<h4 class="primary-color text-capitalize">Koch</h4>

							
						</div>
						<div class="card-footer team-icons d-flex justify-content-between">
							<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						</div>
					</div>
				</div>
				<!--end of team member -->
				<!-- team member -->
			<div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
				<div class="card">
					<img src="Bilder/smokey.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">Smokey Desmok</h1>
						</div>
						<h4 class="primary-color text-capitalize">Chef Koch</h4>

							
						</div>
						<div class="card-footer team-icons d-flex justify-content-between">
							<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						</div>
					</div>
				</div>
				<!--end of team member -->
				<!-- team member -->
			<div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
				<div class="card">
					<img src="Bilder/espresso.jpeg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">George Nespresso</h1>
						</div>
						<h4 class="primary-color text-capitalize">Koch</h4>

							
						</div>
						<div class="card-footer team-icons d-flex justify-content-between">
							<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						</div>
					</div>
				</div>
				<!--end of team member -->
			</div>
		</div>

		<div class="container">
		<div class="row">
			<!-- team member -->
			<div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
				<div class="card">
					<img src="Bilder/thai.jpeg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">Red Madammo</h1>
						</div>
						<h4 class="primary-color text-capitalize">Kellnerin</h4>

							
						</div>
						<div class="card-footer team-icons d-flex justify-content-between">
							<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						</div>
					</div>
				</div>
				<!--end of team member -->
				<!-- team member -->
			<div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
				<div class="card">
					<img src="Bilder/moet.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">Glasso Moeto</h1>
						</div>
						<h4 class="primary-color text-capitalize">Kellner</h4>

							
						</div>
						<div class="card-footer team-icons d-flex justify-content-between">
							<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						</div>
					</div>
				</div>
				<!--end of team member -->
				<!-- team member -->
			<div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
				<div class="card">
					<img src="Bilder/customer1.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">Cooli Coolio</h1>
						</div>
						<h4 class="primary-color text-capitalize">Cool</h4>

							
						</div>
						<div class="card-footer team-icons d-flex justify-content-between">
							<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						</div>
					</div>
				</div>
				<!--end of team member -->
			</div>
		</div>
	
</section>
<!-- social Icons -->
	<div class="container-fluid info p-3" >
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