<?php
	function sjekkBrukernavnPassord($brukernavn,$passord)
	{
		
		include("dbcon.php");
		
		$lovligBruker=true;
		
		$sqls="SELECT * FROM bruker WHERE brukernavn='$brukernavn';";
		$sqlr=mysqli_query($dbcon,$sqls);
		

		if (!$sqlr)
			{
				$lovligBruker=false;
			}
		else
			{
				$rad=mysqli_fetch_array($sqlr);
				$lagretBrukernavn=$rad["brukernavn"];
				$lagretPassord=$rad["passord"];

				$passord=md5($passord); 

				if ($brukernavn!=$lagretBrukernavn || $passord!=$lagretPassord)
				{
					$lovligBruker=false;
				}
			} 
	return $lovligBruker;
	}
?>