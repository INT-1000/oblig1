<?php
	session_start();
?>

<?php include("../forside.html"); ?>

<title>Oppgave 1 </title>
<meta charset="utf-8">

<body>

<h3> Partall eller Oddetall? </h3>

<form method="post" action="" name="ParOdd">
Hvilken av de tallene her er partall? <br />

<?php include("tallrekke.html") ?>

<br />

1<input type="radio" value="1" name="svar" />
2<input type="radio" value="2" name="svar"/>
3<input type="radio" value="3" name="svar" /> <br />
<input type="submit" value="Svar" name="regsvar" />
<input type="reset" value="Nullstill" name="nullstill" />

<a href="/oblig1/parodd/intro.php">Tilbake til oppgave siden</a> <br />

<p id="respons"> </p> <br />		

</form>

<?php

@$regsvar=$_POST["regsvar"];
	$poeng=0;

	if($regsvar)
		{
			$svar=$_POST["svar"];
			$poeng=$_SESSION["poeng"];

			if($svar!=2)
			{
				print("Svaret er feil <br />");
				print("Du du har $poeng stjerner! <br />");
			}
			else
			{	print("$svar er korrekt <br />");
				$poeng++;
				$_SESSION["poeng"]=$poeng;
				print("Du har nå $poeng stjerner! <br />");
				print("<button onclick='location.href='/opg2.php''>Fortsett</button>");
			}
	print("<a href='opg2.php'>Gå videre til oppgave 2</a> <br />");
		}
	include("slutt.html");
?>
