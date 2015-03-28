<?php 
	session_start();
	include("forside.html"); 
?>

<title>Oppgave 1</title>
<meta charset="utf-8">

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

<p id="respons"> </p> <br />		

</form>

<?php

@$regsvar=$_POST["regsvar"];

	if($regsvar)
		{
			$svar=$_POST["svar"];
			$_SESSION["poeng"];

			if($svar!=18)
			{
				print("Svaret er feil <br />");
				print("Du har $poeng stjerner");
			}
			else
			{
				$poeng++;
				$_SESSION["poeng"]=$poeng;
				print("$svar er korrekt <br />");
				print("Du har nå $poeng stjerner! <br />");
			}

				print("<a href='opg4.php'>Gå til neste oppgave</a> <br />");
				$poeng=$_SESSION["poeng"];
		}
	include("slutt.html");
?>
