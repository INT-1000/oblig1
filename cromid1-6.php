<?php
session_start();
?>
<form method="post" action="cromid1-6.php"> 
	Hva heter du? <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
	<input type="submit" value="Fortsett" name="regnavn" >
</form>

<?php
@$regnavn=$_POST["regnavn"];
$poeng=$_SESSION["poeng"];
if($regnavn)
{
	$brukernavn=$_POST["brukernavn"];

	if(!$brukernavn)
	{
		print("Du må fylle ut et navn");
	}
	else
	{
		include("dbcon.php");
		$sqlSetning="SELECT * FROM oppgave WHERE brukernavn='$brukernavn';";
		$sqlResultat=mysqli_query($dbcon,$sqlSetning) or die ("Ikke mulig å hente fra Databasen");
		$antallRader=mysqli_num_rows($sqlResultat);

		if($antallRader!=0)
		{
			print("Navnet er registrert fra før");
		}

		else
		{
			$sqlSetning="INSERT INTO bruker (brukernavn) VALUES ('$brukernavn');";
			mysqli_query($dbcon,$sqlSetning) or die ("kan ikke registrere data i databasen");
			Print("Du er nå registrert med Navn: $navn og poengsumm: $poeng")
		}
	}
print ("<a href='avslutt.php'>Nullstill alt</a><br/>");
$poeng=$_SESSION["poeng"];
}
?>