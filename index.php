
<!DOCTYPE HTML>
<html>
<head>
<title>Forside</title>
<meta charset="utf-8">
<link href="style.css" type="text/css" rel="stylesheet" / >
</head>

<body>
<div id="logo">
<a href="index.php">KAKUS MATTIMUS</a>

</div>
<div class="innholdfram">
<h1>E-læring i matematikk</h1>
<h2>Velkommen til e-læring i matematikk, du skal i denne applikasjonen hjelpe stjernen stein i å finne kaker til bursdagsselskapet sitt. Vennligst logg in for utnyttelse av applikasjonen</h2><br/>

</div>
<div id="logginn">
<form method="post" action="" name="loginSkjema" id="loginSkjema">
Brukernavn: <input type="text" id="brukernavn" name="brukernavn"> <br />
Passord: <input type="password" id="passord" name="passord"> <br />
<input type="submit" value="Logg Inn" name="login">
<input type="reset" value="Nullstill" name="reset"> <br />
</form>

Ny Bruker?
<a href="regbru.php">Registerer her</a> <br />
</div>
<?php
	@$login=$_POST["login"];

	if($login)
	{
		include("sjekk.php");

		$brukernavn=$_POST["brukernavn"];
		$passord=$_POST["passord"];

		if(!sjekkBrukernavnPassord($brukernavn,$passord)) // Sjekker om brukernavn og Passord er korrekt
		{
			print("Feil brukernavn/passord <br />");
		}
		else 
		{
			@session_start();
			$_SESSION["brukernavn"]=$brukernavn; // Brukernavn blir lagt inn i session variabelen
			print("<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=forside.html'>"); 
		}
	}
	
?>


</body>
</html>


