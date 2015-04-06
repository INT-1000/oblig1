
<html>
<body>
<head>
<meta charset="utf-8">
<link href="style.css" type="text/css" rel="stylesheet" / >
</head>
<div class="innholdfram">
<form method="post" action="" id="lagbruker" name="lagbruker" required />
Brukernavn: <input type="text" id="brukernavn" name="brukernavn" required /> <br />
Passord: <input type="password" id="passord" name="passord" required> <br />
<input type="submit" value="Registrer" id="registrer" name="registrer" />
<input type="reset" value="Nullstill" id="nullstill" /> <br />
</form>
</div>
<body>
<div id="logo">
<a href="index.php">KAKUS MATTIMUS</a>

</div>
</body>
</html>

<?php
	@$registrer=$_POST["registrer"];
	
	if($registrer)
	{

	include("dbcon.php");

	$brukernavn=$_POST["brukernavn"];
	$passord=$_POST["passord"];

	if (!$brukernavn || !$passord)
	{
		print("Begge felt må være fylt ut");
	}
	else 
	{
		$sqls="SELECT * FROM bruker WHERE brukernavn='$brukernavn';";
		$sqlr=mysqli_query($dbcon,$sqls) or die ("Kunne ikke hente fra databasen"); 

		if (mysqli_num_rows($sqlr)!=0) // Brukeren er registrert fra før
		{
			print("Brukeren er registrert fra før <br />");
		}
		else
		{
			
			$kryppass=md5($passord); // Passordet blir kryptert med MD5 algoritmen
			$sqls="INSERT INTO bruker(brukernavn, passord) VALUES ('$brukernavn','$kryppass');";
			mysqli_query($dbcon,$sqls) or die("Kunne ikke registrere i databasen");

			print("Brukeren er registrert <br />");
			print("<a href='index.php'>Gå til innloggingsside</a>");
		}	
	}
}

?>