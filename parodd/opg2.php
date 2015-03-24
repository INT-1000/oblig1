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
Hvilken av de tallene her er oddetall? <br />

<?php include("tallrekke.html") ?>

<br />

4<input type="radio" value="4" name="svar" />
6<input type="radio" value="6" name="svar"/>
5<input type="radio" value="5" name="svar" /> <br />
<input type="submit" value="Svar" name="regsvar" />
<input type="reset" value="Nullstill" name="nullstill" />

<p id="respons"> </p> <br />		

</form>

<?php

@$regsvar=$_POST["regsvar"];

	if($regsvar)
		{
			$svar=$_POST["svar"];
			
			if($svar!=5)
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
