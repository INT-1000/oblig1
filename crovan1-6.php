<?php include("logo.html");
 ?>
<?php
session_start();
?>
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<div class="pinnhold">
<form method="post" action="registrering.php"> 
	<input type="submit" value="Fortsett" name="regnavn" >
</form>
</div>
</body>
</html>

<?php
@$regsvar=$_POST["regsvar"];

if($regsvar)
{
	
	$svar=$_POST["svar"];							//Henter input fra html skjema
	$poeng=$_SESSION["poeng"];						//setter Session-variabel
	if($svar==">")									//GIR DEG SVAR PÅ FORRIGE side1.php
	{
		print("<div id='svar'>");
		print("$svar er korrekt<br/>");				
		$poeng++;									//øker poeng med 1
		$_SESSION["poeng"]=$poeng;					//Lagrer Session variabel etter endring
		print("du har $poeng poeng!<br/>");	
		print("</div>");		//sier hvor mange poeng du har
	}

	else 											
	{
		print("<div id='svar'>");
		print("$svar er feil. > er riktig<br/>");	//Sier hva du svarte og hva som var korrekt
		print("du har $poeng poeng!<br/>");	
		print("</div>");	
	}

$poeng=$_SESSION["poeng"];
}
?>