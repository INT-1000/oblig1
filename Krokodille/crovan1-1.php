<?php
	session_start();
	@$innloggetBruker=$_SESSION["brukernavn"];

	if(!$innloggetBruker)
	{
		print("Denne siden krever innlogging <br />");
	}
	else
	{
		include("cronivavelger.php");
?>
<form method="post" action="crovan1-2.php"> 
	Hva er størst? 3+4 ? 2+5  <input type="text" id="svar" name="svar" required /> <br/>
	<input type="submit" value="Fortsett" name="regsvar" >
</form>

<?php
@$regsvar=$_POST["regsvar"];
$poeng=0;											//lager variabel $poeng og setter den til 0
if($regsvar)
{
	$svar=$_POST["svar"];							//Henter input fra html-skjema
	$poeng=$_SESSION["poeng"];						//setter SESSION-variabel poeng
	if($svar=="=")									//GIR DEG SVAR PÅ FORRIGE side3.php
	{
		print("$svar er korrekt<br/>");				
		$poeng++;									//øker poeng med 1
		$_SESSION["poeng"]=$poeng;					//Lagrer Session variabel etter endring
		print("du har $poeng poeng!<br/>");			//sier hvor mange poeng du har
	}

	else 											//Hvis feil, gjør dette
	{
		print("$svar er feil. = er riktig<br/>");	//Sier hva du svarte og hva som var korrekt
		print("du har $poeng poeng!<br/>");				
	}
print ("<a href='avslutt.php'>Nullstill alt</a><br/>");
$poeng=$_SESSION["poeng"];
}
}
?>
