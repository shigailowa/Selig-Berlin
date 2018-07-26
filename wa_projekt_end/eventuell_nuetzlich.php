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

<!--Navbar-->
<nav class="navbar navbar-expand-lg">
	<a href="#" class="navbar-brand text-uppercase secondary-color">SELIG</a>
	<button class="navbar-toggler" type="button" data-toogle="collapse" data-target="#myNavbar">
		<span class="toggler-btn">
			<span class="bar bar1"></span>
			<span class="bar bar2"></span>
			<span class="bar bar3"></span>
		</span>
	</button>
<!-- links --->
<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="navbar-nav mx-auto">
		<li class="nav-item">
			<a href="#special-items" class="nav-link text-capitalize">special items</a>
		</li>
		<li class="nav-item">
			<a href="#menu" class="nav-link text-capitalize">menu</a>
		</li>
		<li class="nav-item">
			<a href="#about" class="nav-link text-capitalize">about</a>
		</li>
		<li class="nav-item">
			<a href="#reviews" class="nav-link text-capitalize">reviews</a>
		</li>
		<li class="nav-item">
			<a href="#team" class="nav-link text-capitalize">team</a>
		</li>
		<li class="nav-item">
			<a href="#contact" class="nav-link text-capitalize">contact</a>
		</li>
		
	</ul>

	<form class="form-inline d-none d-lg-block mr-5">
		<button class="btn nav-btn text-capitalize" type="button">order online</button>
	</form>
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


<div class="col-md-6 about-picture my-4 d-none d-lg-block">
				<img src="Bilder/gericht8.jpg" alt="menu" class="img-1 img-thumbnail about-image">
			</div>


			#contact .card{
  background: rgba(0,0,0,0.5);
  transition: all 2s ease;

}

#contact .card:hover{
  background: rgba(0,0,0,0.8);
}

#contact .card-header{
  color:#ffc914;
}

#contact .input-group-text{
  background: #ffc914;
  border-color: #ffc914;
  color:#242424;
}

#contact .card input{
  color: #606060;
}

#contact .card input::placeholder{
  color: #606060
}

.contact-btn{
  color:#ffc914;
  border-color: #ffc914
  background: transparent;
  transition: all 2s ease-in-out;

}

.contact-btn:hover {
  background: #c9c1ac;
  color: #ffc914;
  border-color: #c9c1ac;
}
