<?php include("intro.php"); ?>

<h3> Partall eller Oddetall? </h3>

<form method="post" action="" name="ParOdd">
Hvilket tall her er Oddetall? <br />

<?php include("tallrekke.html") ?>

<br />

9 <input type="radio" value="9" name="svar" />
20 <input type="radio" value="20" name="svar"/>
2 <input type="radio" value="2" name="svar" /> <br />
<input type="submit" value="Svars" name="regsvar" />
<input type="reset" value="Nullstill" name="nullstill" />

<a href="/oblig1/parodd/intro.php">Tilbake til oppgave siden</a> <br />

<p id="respons"> </p> <br />		

</form>

<?php

@$regsvar=$_POST["regsvar"];

	if($regsvar)
		{
			$svar=$_POST["svar"];
			
			if($svar!=9)
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
