<?php
session_start();
?>
<form method="post" action="registrering.php"> 
	Hva heter du? <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
	<input type="submit" value="Fortsett" name="regnavn" >
</form>

<?php
@$regsvar=$_POST["regsvar"];

if($regsvar)
{
	$brukernavn=$_POST["brukernavn"];
	$svar=$_POST["svar"];							//Henter input fra html skjema
	$poeng=$_SESSION["poeng"];						//setter Session-variabel
	if($svar=="40")									//GIR DEG SVAR PÅ FORRIGE side1.php
	{
		print("$svar er korrekt<br/>");				
		$poeng++;									//øker poeng med 1
		$_SESSION["poeng"]=$poeng;					//Lagrer Session variabel etter endring
		print("du har $poeng poeng!<br/>");			//sier hvor mange poeng du har
	}

	else 											
	{
		print("$svar er feil. 40 er riktig<br/>");	//Sier hva du svarte og hva som var korrekt
		print("du har $poeng poeng!<br/>");		
	}
print ("<a href='../avslutt.php'>Nullstill alt</a><br/>");
$poeng=$_SESSION["poeng"];
}
?>