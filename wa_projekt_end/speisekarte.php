<?php
	include_once "login.php";
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Selig Speisekarte</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet"  href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Speisekarte">
		<meta name="date" content="2018-06-10 22:07:37">
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

	<section id="menu" class="py-5 my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!--title -->
				<div class="row">
				<div class="col">
				<h1 class="secondary-color text-uppercase">Huhn</h1>	
			
			<!-- single item-->
			<div class="single-item d-flex justify-content-left my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price flex-grow-1 align-self-end">
					<h2 class="text-uppercase text-white">Bo Bo</h2>
					<h4 class="text-white">Hähnchen mit Kastanien in Feuerpfanne</h4>
					</div>

			</div>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10,60€</h1>
				</div>


			</div>

		<!-- end of single item -->
			<!--<div class="single-item d-flex justify-content-between my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem ufsdfsdzgzufuftzg fzug5</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>

			</div>-->
		


				<!--title -->
				<div class="row">
				<div class="col">
				<h1 class="secondary-color text-uppercase">Schwein</h1>	
			
			<!-- single item-->
			<div class="single-item d-flex justify-content-left flex-wrap my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price flex-grow-1 align-self-end">
					<h2 class="text-uppercase text-white">Chang-Sha</h2>
					<h4 class="text-white">Schweinebauch mit grünen Paprika</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">9,60€</h1>
				</div>

					</div>

			</div>


			</div>

		<!-- end of single item -->

			<div class="single-item d-flex justify-content-left my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price flex-grow-1 align-self-end">
					<h2 class="text-uppercase text-white">Lei Lei</h2>
					<h4 class="text-white text-left">Schweinefüße</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase content-right text-white">9,60€</h1>
				</div>

			</div>
			
</div>
			<div class="col-md-6">
				<!--title -->
				<div class="row">
				<div class="col">
				<h1 class="secondary-color text-uppercase">Fisch</h1>	
				</div>

			</div>
			<!-- single item-->
			<div class="single-item d-flex justify-content-left my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price flex-grow-1 align-self-end">
					<h2 class="text-uppercase text-white">Rote Laterne</h2>
					<h4 class="text-white">Karpfen in einer Sichuan-Pfeffer-Chili Suppe</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">23,60€</h1>
				</div>


			</div>

		<!-- end of single item -->
		<!--	<div class="single-item d-flex justify-content-between my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem5 dquigdadsafsauigfuiae</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>

			</div>-->

			<!--end of title -->

				<div class="row">
				<div class="col">
				<h1 class="secondary-color text-uppercase">Dessert</h1>	
				</div>

			</div>
			<!-- single item-->
			<div class="single-item d-flex justify-content-left my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price flex-grow-1 align-self-end">
					<h2 class="text-uppercase text-white">Chen Chen</h2>
					<h4 class="text-white text-left">Kartoffel Kuchen Gebratene</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase content-right text-white">3,60€</h1>
				</div>


			</div>

		<!-- end of single item -->
		<!--	<div class="single-item d-flex justify-content-between my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem5 dsrearearwaersfzuzf</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>

			</div>-->

			<!--end of title -->

			</div>
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