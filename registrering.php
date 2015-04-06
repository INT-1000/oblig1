<?php include("logo.php");
 ?>
<?php
	session_start();
	@$innloggetBruker=$_SESSION["brukernavn"];

	if(!$innloggetBruker)
	{
		print("Denne siden krever innlogging <br />");
	}
	else
	{
		
?>
<?php
@$regnavn=$_POST["regnavn"];
$poeng=$_SESSION["poeng"];
$brukernavn=$_SESSION["brukernavn"];

if($regnavn)
{
	$brukernavn=$_SESSION["brukernavn"];

	if(!$brukernavn)
	{
		print("<div id='svar'>");
		print("Du må fylle ut et navn");
		print("</div>");

	}
	else
	{
		include("dbcon.php");
		$sqlSetning="SELECT * FROM bruker WHERE brukernavn='$brukernavn';";
		$sqlResultat=mysqli_query($dbcon,$sqlSetning) or die ("Ikke mulig å hente fra Databasen");
		$antallRader=mysqli_num_rows($sqlResultat);

		if($antallRader==0)
		{
			print("<div id='svar'>");
			print("<br/>Navnet er registrert fra før");
			print("</div>");
		}

		else
		{
	//		$sqlSetning="INSERT INTO bruker(brukernavn,poeng) VALUES ('$brukernavn','$poeng');";
	//		mysqli_query($dbcon,$sqlSetning) or die ("kan ikke registrere bruker i databasen");

			$sqlSetning="UPDATE bruker SET poeng= +'1' WHERE brukernavn='$brukernavn' AND poeng='$poeng' ;";
			mysqli_query($dbcon,$sqlSetning) or die ("kan ikke registrere poeng i databasen");

			print("<div id='svar'>");
			Print("<br/> <br/>Du er nå registrert med Navn: $brukernavn og poengsumm: $poeng");
			print("</div>");
		}
	}

$poeng=$_SESSION["poeng"];
unset($_SESSION['poeng']);
}
}
?>