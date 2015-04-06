<?php
	session_start();
	@$innloggetBruker=$_SESSION["brukernavn"];

	if(!$innloggetBruker)
	{
		print("Denne siden krever innlogging <br />");
	}
	else
	{
		include("nivavelger.php");
?>
<form method="post" action="registrering.php"> 
	<input type="submit" value="Fortsett" name="regnavn" >
</form>



<?php
@$regsvar=$_POST["regsvar"];
include("start.html");
if($regsvar)
{
	$svar=$_POST["svar"];							//Henter input fra html skjema
	$poeng=$_SESSION["poeng"];						//setter Session-variabel
	if($svar=="4")									//GIR DEG SVAR PÅ FORRIGE side1.php
	{
		print("$svar er korrekt<br/>");				
		$poeng++;									//øker poeng med 1
		$_SESSION["poeng"]=$poeng;					//Lagrer Session variabel etter endring
		print("du har $poeng poeng!<br/>");			//sier hvor mange poeng du har
	}

	else 											
	{
		print("$svar er feil. 2 er riktig<br/>");	//Sier hva du svarte og hva som var korrekt
		print("du har $poeng poeng!<br/>");		
	}

if($poeng==4)
	{
		print("spill av lyd");
		$link = "C:\\MAMP\\htdocs\\session\\lett\\applause.mp3"; 
        $audio = "<embed src='".$link."' hidden='true'>"; 
        echo $audio;
    }

print ("<a href='../avslutt.php'>Nullstill alt</a><br/>");
$poeng=$_SESSION["poeng"];
}
}
?>