<?php
	session_start();
	@$innloggetBruker=$_SESSION["brukernavn"];

	if(!$innloggetBruker)
	{
		print("Denne siden krever innlogging <br />");
	}
	else
	{
		include("nivavelger.php");
?>
<?php
session_start();
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
		$sqlSetning="SELECT * FROM kake WHERE brukernavn='$brukernavn';";
		$sqlResultat=mysqli_query($dbcon,$sqlSetning) or die ("Ikke mulig å hente fra Databasen");
		$antallRader=mysqli_num_rows($sqlResultat);

		if($antallRader!=0)
		{
			print("Navnet er registrert fra før");
		}

		else
		{
			$sqlSetning="INSERT INTO kake VALUES ('plussogminus','lett','$brukernavn','$poeng');";
			mysqli_query($dbcon,$sqlSetning) or die ("kan ikke registrere bruker i databasen");

	//		$sqlSetning="INSERT INTO funksjon VALUES ('plussogminus','lett');";
	//		mysqli_query($dbcon,$sqlSetning) or die ("kan ikke registrere oppgave i databasen");

			Print("Du er nå registrert med Navn: $brukernavn og poengsumm: $poeng");
		}
	}
print ("<a href='avslutt.php'>Nullstill alt</a><br/>");
$poeng=$_SESSION["poeng"];
}
}
?>