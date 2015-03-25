<?php
session_start();
print("melding");
?>
<?php
print("fungerer dette?");
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
		$sqlSetning="SELECT * FROM bruker WHERE brukernavn='$brukernavn';";
		$sqlResultat=mysqli_query($dbcon,$sqlSetning) or die ("Ikke mulig å hente fra Databasen");
		$antallRader=mysqli_num_rows($sqlResultat);

		if($antallRader!=0)
		{
			print("Navnet er registrert fra før");
		}

		else
		{
			$sqlSetning="INSERT INTO bruker (brukernavn) VALUES ('$brukernavn');";
			mysqli_query($dbcon,$sqlSetning) or die ("kan ikke registrere bruker i databasen");

			$sqlSetning="INSERT INTO funksjon (oppgave,niva) VALUES ('plussogminus','lett');";
			mysqli_query($dbcon,$sqlSetning) or die ("kan ikke registrere oppgave i databasen");

			Print("Du er nå registrert med Navn: $navn og poengsumm: $poeng");
		}
	}
print ("<a href='avslutt.php'>Nullstill alt</a><br/>");
$poeng=$_SESSION["poeng"];
}
?>