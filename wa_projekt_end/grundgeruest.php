<?php
	include_once "login.php";
?>

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
		<link rel="stylesheet" href="magnific-popup/magnific-popup.css">
	
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

					<a href="https://www.facebook.com/selig1688/" class="mr-2 secondary-color"><i class="fab fa-facebook fa-2x"></i></a><a href="https://www.instagram.com/explore/locations/613185649/selig-restaurant/" class="mr-2 secondary-color"> <i class="fab fa-instagram fa-2x"></i></a><a href="https://www.yelp.de/biz/selig-berlin
" class="mr-2 secondary-color"><i class="fab fa-yelp fa-2x"></i></a> 
				</div>
				<h2 class="secondary-color p-2 text-capitalize">Kaiserdamm 6, Berlin, 14057</h2>
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
					<a href="pre_reservierung.php" class="btn food-btn main-btn text-capitalize my 4">reservieren</a>
				</div>
			</div>			
		</div>
	</div>

 	<a href="#special-items" class="btn header-link secondary-color"><i class="fas fa-arrow-down"></i></a>
	

</header>
<!-- end of header section -->
<!-- special item section-->



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
<!--end of navbar-->

<!-- menu items -->
<section class="py-5" id="special-items">
	<div class="container my-5">
		<div class="row parent-container">
			<!-- menu item -->
			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
				<div class="item-container">
					<img src="Bilder/gericht6.jpg" class="img-fluid img-thumbnail item-img">
					<a href="Bilder/gericht6.jpg" class="item-link px-3">
					</a>
				</div>
			</div>

			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
				<div class="item-container">
					<img src="Bilder/gericht5.jpg" class="img-fluid img-thumbnail item-img">
					<a href="Bilder/gericht5.jpg" class="item-link px-3"></a>
				</div>
			</div>

			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
					<div class="item-container">
					<img src="Bilder/gericht9.jpg" class="img-fluid img-thumbnail item-img">
					<a href="Bilder/gericht9.jpg" class="item-link px-3">
					</a>
				</div>
			</div>

			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
						<div class="item-container">
					<img src="Bilder/gericht4.jpg" class="img-fluid img-thumbnail item-img" alt="menu item">
					<a href="Bilder/gericht4.jpg" class="item-link px-3">
					
					</a>
				</div>
			</div>

			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
			<div class="item-container">
					<img src="Bilder/gericht8.jpg" class="img-fluid img-thumbnail item-img" alt="menu item">
					<a href="Bilder/gericht8.jpg" class="item-link px-3">					</a>
				</div>
			</div>


			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
						<div class="item-container">
					<img src="Bilder/gericht11.jpg" class="img-fluid img-thumbnail item-img">
					<a href="Bilder/gericht11.jpg" class="item-link px-3">
					</a>
				</div>
			</div>
			</div>
		</div>
	
</section>
<!-- end of menu items-->



<!-- about -->
<section id="about" class="text-center">
				<h1 class="text-white">Das ist kein Restaurant, sondern ein Ort</h1>
				<a href="team.php" class="btn main-btn my-4 text-capitalize">Erfahre mehr</a>
</section>
<!--end of about -->
<!-- reviews -->




<!-- social Icons -->
	<div class="container-fluid info p-3" >
		<div class="row">
			<div class="col d-flex justify-content-between align-items-baseline flex-wrap ">
				<div class="info-icons p-2">

					<a href="#" class="mr-2 secondary-color"><i class="fab fa-facebook fa-2x"></i></a><a href="#" class="mr-2 secondary-color"> <i class="fab fa-instagram fa-2x"></i></a><a href="#" class="mr-2 secondary-color"><i class="fab fa-yelp fa-2x"></i></a> 
				</div>
				<h2 class="primary-color p-2 text-uppercase">&copy;copyright 2018</h2>
			</div>

			<!--<a href="#"><i class="fas fa-home"></i></a>-->
		</div>
		<a href="#top-icons" id="back-to-top" class="p-1"><i class="fas fa-arrow-up secondary-color fa-3x" ></i></a>
	</div>



</body>
</html>