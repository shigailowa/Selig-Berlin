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
					<a href="" class="btn food-btn main-btn text-capitalize my 4">reservieren</a>
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



			<!-- Menü Leiste -->
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
<!--end of navbar-->

<!-- menu items -->
<section class="py-5" id="special-items">
	<div class="container my-5">
		<div class="row parent-container">
			<!-- menu item -->
			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
				<div class="item-container">
					<img src="Bilder/gericht6.jpg" class="img-fluid img-thumbnail item-img" alt="menu item">
					<a href="Bilder/gericht6.jpg">
						<h1 class="text-uppercase text-center item-link px-3">menu item</h1>
					</a>
				</div>
			</div>

			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
				<div class="item-container">
					<img src="Bilder/gericht5.jpg" class="img-fluid img-thumbnail item-img" alt="menu item">
					<a href="Bilder/gericht5.jpg">
						<h1 class="text-uppercase text-center item-link px-3">menu item</h1>
					</a>
				</div>
			</div>

			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
					<div class="item-container">
					<img src="Bilder/gericht9.jpg" class="img-fluid img-thumbnail item-img" alt="menu item">
					<a href="Bilder/gericht9.jpg">
						<h1 class="text-uppercase text-center item-link px-3">menu item</h1>
					</a>
				</div>
			</div>

			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
						<div class="item-container">
					<img src="Bilder/gericht4.jpg" class="img-fluid img-thumbnail item-img" alt="menu item">
					<a href="Bilder/gericht4.jpg">
						<h1 class="text-uppercase text-center item-link px-3">menu item</h1>
					</a>
				</div>
			</div>

			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
			<div class="item-container">
					<img src="Bilder/gericht8.jpg" class="img-fluid img-thumbnail item-img" alt="menu item">
					<a href="Bilder/gericht8.jpg">
						<h1 class="text-uppercase text-center item-link px-3">menu item</h1>
					</a>
				</div>
			</div>


			<div class="col-10 mx-auto col-sm-6 col-lg-3 my-3">
						<div class="item-container">
					<img src="Bilder/gericht11.jpg" class="img-fluid img-thumbnail item-img" alt="menu item">
					<a href="Bilder/gericht11.jpg">
						<h1 class="text-uppercase text-center item-link px-3">menu item</h1>
					</a>
				</div>
			</div>
			</div>
		</div>
	
</section>
<!-- end of menu items-->



<!-- about -->
<section id="about" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 my-4">
				<h1 class="text-uppercase display-3">about us</h1>
				<h2 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sit voluptatem, pariatur vel error praesentium!</h2>
				<a href="" class="btn main-btn my-4 text-capitalize">learn more</a>
			</div>
			<div class="col-md-6 about-picture my-4 d-none d-lg-block">
				<img src="Bilder/gericht8.jpg" alt="menu" class="img-1 img-thumbnail about-image">
			</div>
		</div>
	</div>
</section>
<!--end of about -->
<!-- reviews -->
<section id="reviews" class="py-5">
	<div id="slider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<!-- carousel item -->
			<div class="carousel-item active">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">

						<!-- image -->
							<div class="align-self-center ml-3">
								<img src="Bilder/customer1.jpg" alt="" class="rounded-circle review-img">
							</div>
						<!-- text -->
							<div class="review-text px-5">
								<h2 class="text-capitalize mb-3 primary-color">customer name</h2>
								<p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, minus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end of carousel item-->
					<!-- carousel item -->
			<div class="carousel-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">

						<!-- image -->
							<div class="align-self-center ml-3">
								<img src="Bilder/customer1.jpg" alt="" class="rounded-circle review-img">
							</div>
						<!-- text -->
							<div class="review-text px-5">
								<h2 class="text-capitalize mb-3 primary-color">customer name</h2>
								<p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, minus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end of carousel item-->
		</div>


		<!-- carousel controls-->
		<a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev"></span>
		</a>
		<a href="#slider" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next"></span>
		</a>
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
		<a href="#top-icons" id="back-to-top" class="p-1"><i class="fas fa-arrow-up secondary-color fa-3x" ></i></a>
	</div>



</body>
</html>