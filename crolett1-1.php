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
<form method="post" action="crolett1-2.php"> 
<div id="svarrute"> <input type="text" id="svar" name="svar" required /> </div>
	Hva er størst? 1 eller 2  <br/><br/><br/><br/>
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
	if($svar=="<")									//GIR DEG SVAR PÅ FORRIGE side3.php
	{
		print("<div id='svar'>");
		print("$svar er korrekt<br/>");				
		$poeng++;									//øker poeng med 1
		$_SESSION["poeng"]=$poeng;					//Lagrer Session variabel etter endring
		print("du har $poeng poeng!<br/>");	
		print("</div>");		//sier hvor mange poeng du har
	}

	else 											//Hvis feil, gjør dette
	{
		print("<div id='svar'>");
		print("$svar er feil. < er riktig<br/>");	//Sier hva du svarte og hva som var korrekt
		print("du har $poeng poeng!<br/>");	
		print("</div>");			
	}

$poeng=$_SESSION["poeng"];
}
}
?>
