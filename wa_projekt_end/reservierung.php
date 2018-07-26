<?php
	include_once "login.php";
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Selig Reservierung</title>
		<meta name="author" content="Tatjana Shigailow, Mauricio Hess">
		<meta name="description" content="Selig Berlin Restaurant">
		<meta name="keywords" content="Selig, Berlin, Restaurant, Reservierung">
		<meta name="date" content="2018-06-10 22:07:37">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet"  href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  <link rel="stylesheet" href="/resources/demos/style.css">
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script src="js/all.js"></script>
	</head>


	<body>


		<!--<script src="js/jquery-3.3.1.min.js"></script>-->
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
</nav>


<div class="container-fluid justify-content-between">
	<form id = "zeitformular" action = "machereservierung.php">
		<div class="secondary-color text-uppercase"> Wählen Sie Datum und Uhrzeit: <input name = "tag" type="text" id="datepicker">

		    <script>
			  $( function() {
			    $( "#datepicker" ).datepicker();
			  } );
 			 </script>
 		<input name = "zeit" type = "time" id = "timepicker" min = "12:00" max = "22:00">
 		<input type = "hidden" name = "tisch" id = "tischformular">
		<input type="submit" id="abschicken" name="abschicken" value="OK">
	</form>
</div>
</div>


	<script type="text/javascript">
					// das wird ausgeführt, sobald die Seite im Browser fertig geladen ist (document-ready Event)
		$($("#zeitformular").submit (function (e) {
				e.preventDefault();
				// das fragt beims server nach freien tischen für bestimmten tag
				$.getJSON("freie-tische.php?tag=" + document.getElementById("datepicker").value + "&zeit=" + document.getElementById("timepicker").value, function(data){
				    $.each(data, function (index, value) {
				        if(value) {
				        	document.getElementById("tisch_" + index).setAttribute("fill", "green");
				        }
					   	else
					   		document.getElementById("tisch_" + index).setAttribute("fill", "red");
				    });
				});
			}));
		</script>


<script>
	$(function() {
		$('#tisch_1').click(function(){
			if (document.getElementById("tisch_1").getAttribute("fill") == "green") {
				alert("Tisch reservieren");
				document.getElementById("tischformular").value = 1;
				document.forms["zeitformular"].submit();
			}
		});
	});
</script>

<script>
	$(function() {
		$('#tisch_2').click(function(){
			if (document.getElementById("tisch_2").getAttribute("fill") == "green") {
				alert("Tisch reservieren");
				document.getElementById("tischformular").value = 2;
				document.forms["zeitformular"].submit();
			}
		});
	});
</script>

<script>
	$(function() {
		$('#tisch_3').click(function(){
			if (document.getElementById("tisch_3").getAttribute("fill") == "green") {
				alert("Tisch reservieren");
				document.getElementById("tischformular").value = 3;
				document.forms["zeitformular"].submit();
			}
		});
	});
</script>

<script>
	$(function() {
		$('#tisch_4').click(function(){
			if (document.getElementById("tisch_4").getAttribute("fill") == "green") {
				alert("Tisch reservieren");
				document.getElementById("tischformular").value = 4;
				document.forms["zeitformular"].submit();
			}
		});
	});
</script>

<script>
	$(function() {
		$('#tisch_5').click(function(){
			if (document.getElementById("tisch_5").getAttribute("fill") == "green") {
				alert("Tisch reservieren");
				document.getElementById("tischformular").value = 5;
				document.forms["zeitformular"].submit();
			}
		});
	});
</script>

<script>
	$(function() {
		$('#tisch_6').click(function(){
			if (document.getElementById("tisch_6").getAttribute("fill") == "green") {
				alert("Tisch reservieren");
				document.getElementById("tischformular").value = 6;
				document.forms["zeitformular"].submit();
			}
		});
	});
</script>

<script>
	$(function() {
		$('#tisch_7').click(function(){
			if (document.getElementById("tisch_7").getAttribute("fill") == "green") {
				alert("Tisch reservieren");
				document.getElementById("tischformular").value = 7;
				document.forms["zeitformular"].submit();
			}
		});
	});
</script>



<div class="container px-4 my-4">
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="777" height="480" style="">                                    <title>my vector image</title>                                    <!-- Created with Vector Paint - http://www.vectorpaint.yaks.com/ https://chrome.google.com/webstore/detail/hnbpdiengicdefcjecjbnjnoifekhgdo -->                                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none"/>                                <g class="currentLayer" style=""><title>Layer 1</title><rect fill="#000000" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="svg_2" x="325.81745564262854" y="120.10316681697415" width="125.36508178710938" height="239.79365216665855" class="" fill-opacity="1" opacity="1" stroke-dasharray="none"/><rect fill="#4a90d6" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="svg_4" x="416" y="266" width="0" height="1"/><rect fill="#919191" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="tisch_3" x="654.793661636321" y="47.777777671813965" width="100.44444453716278" height="81.28571605682373" class=""/><rect fill="#919191" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="tisch_2" x="510.77778109086523" y="45.71428917664298" width="81.20635298765222" height="85.3968261041939" class=""/><rect fill="#919191" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="svg_16" x="97" y="389" width="10" height="0"/><rect fill="#919191" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="tisch_6" x="52.65079391966162" y="208.2366465330124" width="140.52381241321564" height="81.52526521682739" class=""/><rect fill="#919191" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="525.6666635967284" y="366.9668114185333" width="140.52381241321564" height="81.52526521682739" class="" id="tisch_5"/><rect fill="#919191" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="604.7172897241616" y="209.42305672168732" width="158.7702641038191" height="81.52526521682739" class="" id="tisch_4" transform="rotate(89.5065, 684.102, 250.186)"/><rect fill="#919191" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="tisch_7" x="61.20633603789406" y="358.28572610798096" width="81.13920917382507" height="86.20634278436754" class=""/><rect fill="#919191" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="tisch_1" x="63.69840055776376" y="52.20634678666879" width="97.66367571301237" height="79.47619270300576" class=""/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="svg_59" x="75.58730161190033" y="28.58730161190033" width="19" height="17" class=""/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="123.99999904632568" y="27.79364985227585" width="19" height="17" class="" id="svg_62"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="138.2857128381729" y="296.04762840270996" width="19" height="17" class="" id="svg_65"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="78.76190197467804" y="296.84127366542816" width="19" height="17" class="" id="svg_66"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="143.84126567840576" y="184.14285850524902" width="19" height="17" class="" id="svg_67" transform="rotate(0.340231, 153.341, 192.643)"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="80.3492032289505" y="184.14285600185394" width="19" height="17" class="" id="svg_68"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="203.36507612466812" y="241.28571581840515" width="19" height="17" class="" id="svg_69"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="153.36507660150528" y="394.46031814813614" width="19" height="17" class="" id="svg_70"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="724.0000014901161" y="137.31744992733002" width="19" height="17" class="" id="svg_74"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="670.8254094719887" y="137.31745505332947" width="19" height="17" class="" id="svg_75"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="737.4920780062675" y="184.93650317192078" width="19" height="17" class="" id="svg_78"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="609.7142930626869" y="185.73015189170837" width="19" height="17" class="" id="svg_79"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="739.079373896122" y="292.0793559551239" width="19" height="17" class="" id="svg_90"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="608.9206443428993" y="240.4920585155487" width="19" height="17" class="" id="svg_80"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="739.0793758034706" y="240.49205613136292" width="19" height="17" class="" id="svg_81"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="609.714290201664" y="292.87300753593445" width="19" height="17" class="" id="svg_82"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="552.5714395642281" y="342.0793607234955" width="19" height="17" class="" id="svg_83"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="677.9682586789131" y="397.634918153286" width="19" height="17" class="" id="svg_84"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="611.3015859723091" y="342.07935881614685" width="19" height="17" class="" id="svg_85"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="496.22222405672073" y="399.22221636772156" width="19" height="17" class="" id="svg_86"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="553.3650833964348" y="456.3650740981102" width="19" height="17" class="" id="svg_87"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="612.888891518116" y="455.57141852378845" width="19" height="17" class="" id="svg_89"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="721.6190410256386" y="21.444449186325073" width="19" height="17" class="" id="svg_76"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="667.6507859826088" y="21.44443678855896" width="19" height="17" class="" id="svg_77"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="545.4285598397255" y="142.87301325798035" width="19" height="17" class="" id="svg_72"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="540.6666570305824" y="19.063487768173218" width="19" height="17" class="" id="svg_73"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="26.380944788455963" y="394.4603202342987" width="19" height="17" class="" id="svg_71"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="73.99999809265137" y="136.52380657196045" width="19" height="17" class="" id="svg_63"/><rect fill="none" stroke="#222222" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="123.20634710788727" y="136.52380549907684" width="19" height="17" class="" id="svg_64"/><path fill="none" fill-opacity="1" stroke="#222222" stroke-opacity="1" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" id="svg_95" d="M369.89007568359375,270.8838806152344 C364.30963134765625,267.73309326171875 370.03167724609375,261.5111999511719 374.6847839355469,263.5233459472656 C378.14739990234375,263.5150146484375 381.61004638671875,263.5205078125 385.0726623535156,263.5189208984375 C385.0726623535156,256.346923828125 385.0726623535156,249.17495727539062 385.0726623535156,242.00299072265625 C376.3987731933594,230.9837646484375 367.724853515625,219.96456909179688 359.05096435546875,208.94537353515625 C378.6833190917969,208.86862182617188 398.31585693359375,208.86871337890625 417.9482116699219,208.94537353515625 C409.43023681640625,220.01904296875 400.9122619628906,231.09268188476562 392.3943176269531,242.16632080078125 C392.3943176269531,249.28387451171875 392.3943176269531,256.4013977050781 392.3943176269531,263.5189208984375 C397.5069580078125,263.5669250488281 402.6283264160156,263.38836669921875 407.73345947265625,263.70062255859375 C411.75299072265625,264.8377685546875 410.1439514160156,271.7900085449219 406.23760986328125,271.05712890625 C394.12213134765625,271.0127258300781 382.0028076171875,271.13800048828125 369.89007568359375,270.8838806152344 zM395.0823059082031,231.9300537109375 C398.9869079589844,230.36309814453125 398.43798828125,223.58270263671875 394.2494812011719,222.891357421875 C387.93121337890625,221.05841064453125 386.5668640136719,232.6015625 393.20782470703125,232.3306884765625 C393.8490905761719,232.33511352539062 394.50067138671875,232.239501953125 395.0823059082031,231.9300537109375 z" class=""/><path fill="#ffffff" fill-opacity="1" stroke="#222222" stroke-opacity="1" style="color: rgb(0, 0, 0);" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" id="svg_101" d="M389.1688003540039,25.297077178955078 L374.30968475341797,6.402462005615234 L374.30968475341797,15.84976577758789 L358.36048126220703,15.84976577758789 L358.36048126220703,-12.492162704467773 L401.16187286376953,-12.492162704467773 L401.16187286376953,63.08632278442383 L358.36048126220703,63.08632278442383 L358.36048126220703,34.744388580322266 L374.30968475341797,34.744388580322266 L374.30968475341797,44.19169998168945 L389.1688003540039,25.297080993652344 z" class="" transform="rotate(90.1666, 379.76, 25.2968)"/></g></svg>
	
</div>
	


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