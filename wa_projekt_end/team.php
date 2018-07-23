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
<!-- team -->
<section id="team" class="py-5">
	<div class="container">
		<div class="row">
			<!-- team member -->
			<div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
				<div class="card">
					<img src="Bilder/customer1.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">team member</h1>
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
					<img src="Bilder/customer1.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">team member</h1>
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
					<img src="Bilder/customer1.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">team member</h1>
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
					<img src="Bilder/customer1.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">team member</h1>
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
					<img src="Bilder/customer1.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">team member</h1>
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
					<img src="Bilder/customer1.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<div class="card-title">
							<h1 class="text-capitalize">team member</h1>
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
	
</section>
<!-- end of team -->
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