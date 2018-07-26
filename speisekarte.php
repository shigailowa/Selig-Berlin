<!DOCTYPE html>
<html>
	
	<head>
		<title>Selig Speisekarte</title>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Speisekarte">
		<meta name="date" content="2018-06-10 22:07:37">
		<link rel='stylesheet' href='css/page-flip.css'>
		<script src="css/page-flip.js"></script>
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
		<ul>
			<li><a href = "grundgeruest.php"> Startseite </a> </li>
			<li><a href = "speisekarte.php"> Speisekarte </a> </li>
			<li><a href = "reservierung.php"> Reservierung </a> </li>
			<li><a href = "team.php"> Team </a> </li>
			<li><a href = "kontakt.php"> Kontakt </a></li>
			<li><a href = "javascript:toggle('eingabeformular');"><img src="Bilder/worker.png"></a>
		</ul>



		<div id="eingabeformular" style="display:none;">
		
			<div id="hinweis">Bitte Einloggen</div>

			<form name="einTestFormular" action="login.php" method="GET">
			<input type="hidden" id="seite" name="seite" value="speisekarte">
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


		<script>
		  new Pageflip("#bilder", [
		    "Bilder/speisekarte1.jpg",
		    "Bilder/speisekarte2.jpg",
		    "Bilder/speisekarte4.jpg",
		    "Bilder/speisekarte3.jpg",
		    "Bilder/speisekarte5.jpg",
		    "Bilder/speisekarte6.jpg"
		  ]);
		</script>

		<div><input name = "speisekarte" type = "text" id = "bilder"></div>

<!--
		<ul>
			<li> <img src="Bilder/speisekarte1.jpg"></li>
			<li> <img src="Bilder/speisekarte2.jpg"></li>
			<li> <img src="Bilder/speisekarte4.jpg"></li>
			<li> <img src="Bilder/speisekarte3.jpg"></li>
			<li> <img src="Bilder/speisekarte5.jpg"></li>
			<li> <img src="Bilder/speisekarte6.jpg"></li>
			<li> <img src="Bilder/speisekarte7.jpg"></li>
			<li> <img src="Bilder/speisekarte8.jpg"></li>
			<li> <img src="Bilder/speisekarte9.jpg"></li>
			<li> <img src="Bilder/speisekarte10.jpg"></li>
			<li> <img src="Bilder/speisekarte11.jpg"></li>
			<li> <img src="Bilder/speisekarte12.jpg"></li>
			<li> <img src="Bilder/selig_speisekarte.jpg"></li>
		</ul> -->


	</body>

</html>