<?php include("logo.html");
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
		include("nivavelger.php");
?>
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<div class="innhold">
<form method="post" action="p1-2.php"> 
	Hva er 1+1? <input type="number" id="svar" name="svar" required /> <br/>
	<input type="submit" value="Fortsett" name="regsvar" >
</form>
</div>
</body>
</html>

<?php
@$regsvar=$_POST["regsvar"];
$poeng=0;											//lager variabel $poeng og setter den til 0
if($regsvar)
{
	$svar=$_POST["svar"];							//Henter input fra html-skjema
	$poeng=$_SESSION["poeng"];						//setter SESSION-variabel poeng
	if($svar=="6")									//GIR DEG SVAR PÅ FORRIGE side3.php
	{
		print("<div id='svar'>");
		print("$svar er korrekt<br/>");				
		$poeng++;									//øker poeng med 1
		$_SESSION["poeng"]=$poeng;					//Lagrer Session variabel etter endring
		print("du har $poeng poeng!<br/>");
		print("</div>");							//sier hvor mange poeng du har
	}

	else 											//Hvis feil, gjør dette
	{
		print("<div id='svar'>");
		print("$svar er feil. 6 er riktig<br/>");	//Sier hva du svarte og hva som var korrekt
		print("du har $poeng poeng!<br/>");	
		print("</div>");			
	}
print ("<a href='../avslutt.php'>Nullstill alt</a><br/>");
$poeng=$_SESSION["poeng"];
}
}
?>
