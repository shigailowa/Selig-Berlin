<!DOCTYPE html>
<html>
	
	<head>
		<title>Selig Kontakt</title>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Kontakt">
		<meta name="date" content="2018-06-10 22:07:37">
		<!--CSS-->
		 <style> 
	      	#karte {
		        height: 400px;
		        width: 400px;
	       	}
    	</style>

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
			<input type="hidden" id="seite" name="seite" value="kontakt">
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


		<!--Google Maps Karte -->
		<div id = "karte"> </div>
		<script>
     		function initKarte() {
	        	var point = {lat: 52.5109678, lng: 13.2926349};
	        	var map = new google.maps.Map(document.getElementById('karte'), {
	          	zoom: 15,
	          	center: point
	        	});
		        var marker = new google.maps.Marker({
		        position: point,
		        map: map
	        	});
      		}
    	</script>
    	<script async defer
	    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCunppvqQK3QDm6q2AChsBNIaez0xPAc9Y&callback=initKarte">
	    </script>
	    <div id = "kontaktdaten">
	    	Selig Restaurant </br>
	    	Kaiserdamm 6</br>
			14057 Berlin</br>
			030 91493669
	    </div>


	</body>

</html>