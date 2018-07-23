<!DOCTYPE html>
<html>
	
	<head>
		<title>Selig Speisekarte</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet"  href="css/style2.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<div class="container-fluid">
	<a class="navbar-brand secondary-color" href="#">Selig</a>
	<button class="navbar-toogler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toogler-icon"></span>
	</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active"><a class="nav-link" href = "#"> Startseite </a> </li>
			<li class="nav-item"><a class="nav-link" href = "#"> Speisekarte </a> </li>
			<li class="nav-item"><a class="nav-link" href = "#"> Reservierung </a> </li>
			<li class="nav-item"><a class="nav-link" href = "#"> Team </a> </li>
			<li class="nav-item"><a class="nav-link" href = "#"> Kontakt </a></li>
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

	<section id="menu" class="py-5 my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!--title -->
				<div class="row">
				<div class="col">
				<h1 class="secondary-color text-uppercase">Vorspeise</h1>	
				</div>

			</div>
			<!-- single item-->
			<div class="single-item d-flex justify-content-between my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem5 zffsdsftzdtdrdtrtz</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>


			</div>

		<!-- end of single item -->
			<div class="single-item d-flex justify-content-between my-3 p-3 special">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem ufsdfsdzgzufuftzg fzug5</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>
				<h3 class="special-text text-capitalize">Empfehlung Chefkoch</h3>


			</div>
		


				<!--title -->
				<div class="row">
				<div class="col">
				<h1 class="secondary-color text-uppercase">Vorspeise</h1>	
				</div>

			</div>
			<!-- single item-->
			<div class="single-item d-flex justify-content-between my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">huhn</h2>
					<h4 class="text-white">lorem5 hihihihig ihoh fzfgi</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>


			</div>

		<!-- end of single item -->

			<div class="single-item d-flex justify-content-between my-3 p-3 special">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">huhn</h2>
					<h4 class="text-white">lorem5 hhggugujujggh gugu</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>
				<h3 class="special-text text-capitalize">Empfehlung Chefkoch</h3>


			</div>
			
</div>
			<div class="col-md-6">
				<!--title -->
				<div class="row">
				<div class="col">
				<h1 class="secondary-color text-uppercase">Vorspeise</h1>	
				</div>

			</div>
			<!-- single item-->
			<div class="single-item d-flex justify-content-between my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem5 ugsaafsfdaduigsaugf</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>


			</div>

		<!-- end of single item -->
			<div class="single-item d-flex justify-content-between my-3 p-3 special">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem5 dquigdadsafsauigfuiae</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>
				<h3 class="special-text text-capitalize">Empfehlung Chefkoch</h3>


			</div>

			<!--end of title -->

				<div class="row">
				<div class="col">
				<h1 class="secondary-color text-uppercase">Vorspeise</h1>	
				</div>

			</div>
			<!-- single item-->
			<div class="single-item d-flex justify-content-between my-3 p-3">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem5 gzufufcztdzifadf</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>


			</div>

		<!-- end of single item -->
			<div class="single-item d-flex justify-content-between my-3 p-3 special">
				<div class="single-item-text"></div>
				<div class="single-item-price align-self-end">
					<h2 class="text-uppercase text-white">soup</h2>
					<h4 class="text-white">lorem5 dsrearearwaersfzuzf</h4>

				</div>
				<div class="single-item-price align-self-end">
					<h1 class="text-uppercase text-white">10€</h1>
				</div>
				<h3 class="special-text text-capitalize">Empfehlung Chefkoch</h3>


			</div>

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

					<a href="#" class="mr-2 secondary-color"><i class="fab fa-facebook fa-2x"></i></a><a href="#" class="mr-2 secondary-color"> <i class="fab fa-instagram fa-2x"></i></a><a href="#" class="mr-2 secondary-color"><i class="fab fa-twitter fa-2x"></i></a><a href="#" class="mr-2 secondary-color"><i class="fab fa-yelp fa-2x"></i></a> 
				</div>
				<h2 class="primary-color p-2 text-uppercase">&copy;copyright 2018</h2>
			</div>

			<!--<a href="#"><i class="fas fa-home"></i></a>-->
		</div>
		
	</div>



	</body>
</html>