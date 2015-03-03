<form method="post" action="lett1-10.php" id="regsvar" name="regsvar">
<p> 8?7</p>
	Svar		<input type="text" id="svar" name="svar" required/> <br/>
				<input type="submit" value="Fortsett" id="regSvarKnapp" name="regSvarKnapp"/>
				<input type="reset" value="nullstill" id="nullstill" name="nullstill"/>
</form>
<?php
	@$regSvarKnapp=$_POST["regSvarKnapp"];
	if($regSvarKnapp)
	{

	
	@$svar=$_POST["svar"];
	if ($svar==">")
	{
		print("Gratulerer, det er riktig!");
		print ("<a href='lett1-1.php'>Start på nytt</a>");
		print ("<a href='krokodille.html'>Tilbake til Krokodille oppgave</a>");
		print ("<a href='middels1-1.php'>Neste nivå: krokodille med regnestykke</a>");
		print ("<a href='oblig1/forside.html'>Tilbake til forsiden</a>");
	}
	else
	{
		print("Beklager, $svar er feil. Riktig svar er >.");
		print ("<a href='lett1-1.php'>Start på nytt</a>");
		print ("<a href='krokodille.html'>Tilbake til krokodille oppgave</a>");
		print ("<a href='tema2/middels1-1.php'>Neste nivå: krokodille med regnestykke</a>");
		print ("<a href='oblig1/forside.html'>Tilbake til forsiden</a>");
	}
	}

?>