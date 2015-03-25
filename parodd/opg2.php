<<<<<<< HEAD
<?php
	session_start();
	include("../forside.html"); 
?>

<title>Oppgave 1 </title>

<meta charset="utf-8">
=======
<!DOCTYPE HTML>
<html>
<head>
<?php include("forside.html"); ?>
<title>Oppgave 1 </title>
<meta charset="utf-8">
</head>
>>>>>>> origin/sarushan

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

<a href="/oblig1/parodd/intro.php">Tilbake til oppgave siden</a> <br />

<p id="respons"> </p> <br />		

</form>

<?php

@$regsvar=$_POST["regsvar"];

	if($regsvar)
		{
			$svar=$_POST["svar"];
<<<<<<< HEAD
			$poeng=$_SESSION["poeng"];

			if($svar!=5)
			{
				print("Svaret er feil <br />");
				print("Du har $poeng stjerner!");
=======
			
			if($svar!=5)
			{
				print("Svaret er feil <br />");
>>>>>>> origin/sarushan
			}
			else
			{
				print("$svar er korrekt <br />");
<<<<<<< HEAD
				$poeng++;
				$_SESSION["poeng"]=$poeng;
				print("Du har nå $poeng stjerner! <br />");
			}
	print("<a href='opg3.php'>Gå til neste oppgave</a> <br />");
	$poeng=$_SESSION["poeng"];
=======
				print("Du fikk 1 poeng nå <br />");
			}
	print("<a href='intro.php'>Tilbake til forsiden</a> <br />");
>>>>>>> origin/sarushan
		}
	include("slutt.html");
?>
