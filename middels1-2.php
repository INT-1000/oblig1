<form method="post" action="middels1-2.php" id="regsvar" name="regsvar">
<p> 3?5</p>
	Svar		<input type="text" id="svar" name="svar" required/> <br/>
				<input type="submit" value="Fortsett" id="regSvarKnapp" name="regSvarKnapp"/>
				<input type="reset" value="nullstill" id="nullstill" name="nullstill"/>
</form>
<?php
	@$regSvarKnapp=$_POST["regSvarKnapp"];
	if($regSvarKnapp)
	{

	
	@$svar=$_POST["svar"];
	if ($svar=="<")
	{
		print("Gratulerer, det er riktig!");
		print ("<a href='middels1-3.php'>Neste oppgave</a>");
	}
	else
	{
		print("Beklager, $svar er feil. Riktig svar er <.");
		print ("<a href='middels1-3.php'>Neste oppgave</a>");
	}
	}

?>