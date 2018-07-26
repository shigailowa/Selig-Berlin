<?php



// Speichere übertragenen Navigationspunkt in Variable und zeige Inhalt
if(isset($_REQUEST["navi"]))
{
	$navi = $_REQUEST["navi"];
}
// Falls nichts übertragen wurde: Nimm home als Seite
else
{
	$navi = "startseite";
}

// Lege Inhalt fest
// erstmal: Leer
$inhalt = "";
// Je nach übertragener Navi: Wähle Seite
switch($navi)
{
	case "startseite":
		include_once "grundgeruest.php";
		break;
	case "kontakt":
		include_once "kontakt.php";
		break;
	case "reservierung":
		include_once "reservierung.php";
		break;
	case "speisekarte":
		include_once "speisekarte.php";
		break;
	case "team":
		include_once "team.php";
		break;
}


?>