<?php
session_start();
?>
<form method="post" action="side1.php"> 
	Hva er 3+3? <input type="number" id="svar" name="svar" required /> <br/>
	<input type="submit" value="Fortsett" name="regsvar" >
</form>

<?php
@$regsvar=$_POST["regsvar"];

if($regsvar)
{
	$svar=$_POST["svar"];								//Henter input fra html skjema
	$poeng=$_SESSION["poeng"];							//setter Session-variabel
	if($svar=="4")										//GIR DEG SVAR PÅ FORRIGE side2.php
	{
		print("$svar er korrekt<br/>");				
		$poeng++;										//øker poeng med 1
		$_SESSION["poeng"]=$poeng;						//Lagrer Session variabel etter endring
		print("du har $poeng poeng!<br/>");				//sier hvor mange poeng du har
	}

	else 												
	{
		print("$svar er feil. 4 er riktig<br/>");		//Sier hva du svarte og hva som var korrekt
		print("du har $poeng poeng!<br/>");			
	}
print ("<a href='side1.php'>Start på nytt</a><br/>");
print ("<a href='avslutt.php'>Nullstill alt</a><br/>");
$poeng=$_SESSION["poeng"];
}
?>