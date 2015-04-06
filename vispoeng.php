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
		include("dbcon.php"); 

$sql="SELECT brukernavn, poeng FROM bruker ORDER by poeng;";
$sqlresultat=mysqli_query($dbcon, $sql) or die ("Ikke mulig å hente data fra databasen"); 
$antallrader=mysqli_num_rows($sqlresultat); 

print("<div class='innhold'>");
print("<h3>POENG</h3>"); 
print("<table border=1>");
print("<tr><th align=left>Brukernavn</th> <th align=left>Poeng</th>");


for($r=1; $r<=$antallrader; $r++)
{
	$rad=mysqli_fetch_array($sqlresultat);
	$brukernavn=$rad["brukernavn"];
	$poeng=$rad["poeng"];

	print("<tr> <td> $brukernavn </td> <td> $poeng </td> </tr>");
}

print("</table>");
print("</div>");


}

?>