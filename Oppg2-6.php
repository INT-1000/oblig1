<?php include("logo.php");
 ?>

<?php
	session_start();
	@$innloggetBruker=$_SESSION["brukernavn"];

	if(!$innloggetBruker)
	{
		print("Denne siden krever innlogging <br />");
	}
	else
	{
		
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
	if($svar=="3")									//GIR DEG SVAR PÅ FORRIGE side1.php
	{
		print("<div id='svar'>");
		print("Halv 9 er korrekt<br/>");				
		$poeng++;									//øker poeng med 1
		$_SESSION["poeng"]=$poeng;					//Lagrer Session variabel etter endring
		print("du har $poeng poeng!<br/>");	
		print("</div>");		//sier hvor mange poeng du har
	}

	else 											
	{
		print("<div id='svar'>");
		print("Svar er feil. Halv 9 er riktig<br/>");	//Sier hva du svarte og hva som var korrekt
		print("du har $poeng poeng!<br/>");
		print("</div>");		
	}

if($poeng>=4)
	{
    	$link = "https://home.hbv.no/884612/app/sounds/applause.mp3"; 
   		$audio = "<embed src='".$link."' hidden='true'>"; 
    	echo $audio;
    }

$poeng=$_SESSION["poeng"];
}
}
?>