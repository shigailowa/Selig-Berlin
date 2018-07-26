<?php
	include_once "login.php";
?>

<!DOCTYPE html>

<html>
	
	<?php
		if ($_SESSION['loginOK'] == false) {
	?>

	<div> Bitte zuerst einloggen </div>

	<div id="eingabeformular">
		
			<div id="hinweis">Bitte Einloggen</div>

			<form target = "_blank" name="einTestFormular" action="login.php" method="GET">
			<input type="hidden" id="seite" name="seite" value="reservierung">
			<!-- hier folgen die Formularelemente -->
				<fieldset>
					<legend>Formular</legend>
					<table>
						<tr>
							<td><label for="email">E-Mail:</label></td>
							<td><input type="text" id="email" name="E-Mail" placeholder="Ihre E-Mail"></td>
						</tr>
						<tr>
							<td><label for="passwort">Passwort:</label></td>
							<td><input type="password" id="passwort" name="Passwort" placeholder="Ihr Passwort"></td>
						</tr>
						<tr>
							<td><label for="abschicken">Abschicken:</label></td>
							<td><input onclick="window.location.href = 'reservierung.php';" type="submit" id="abschicken" name="abschicken" value="OK"></td>
						</tr>
					</table>
					<a href = "registrieren.php"> Noch keinen Account? </a>
				</fieldset>
			</form>
		</div>

		<?php

			}
		else {
			
		?>

		 <script type="text/javascript">
            window.location.href = "reservierung.php";
        </script>
        <?php
		}
		?>
	
	
</html> 