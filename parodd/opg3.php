<!DOCTYPE HTML>
<html>
<head>
<?php include("forside.html"); ?>
<title>Oppgave 1 </title>
<meta charset="utf-8">
</head>

<body>

<h3> Partall eller Oddetall? </h3>

<form method="post" action="" name="ParOdd">
Hvilket tall her er partall? <br />

<?php include("tallrekke.html") ?>

<br />

10 <input type="radio" value="10" name="svar" />
13 <input type="radio" value="13" name="svar"/>
18 <input type="radio" value="18" name="svar" /> <br />
<input type="submit" value="Svar" name="regsvar" />
<input type="reset" value="Nullstill" name="nullstill" />

<a href="/oblig1/parodd/intro.php">Tilbake til oppgave siden</a> <br />

<p id="respons"> </p> <br />		

</form>

<?php

@$regsvar=$_POST["regsvar"];

	if($regsvar)
		{
			$svar=$_POST["svar"];
			
			if($svar!=18)
			{
				print("Svaret er feil <br />");
			}
			else
			{
				print("$svar er korrekt <br />");
				print("Du fikk 1 poeng nå <br />");
			}
	print("<a href='intro.php'>Tilbake til forsiden</a> <br />");
		}
	include("slutt.html");
?>
