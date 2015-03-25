
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<form method="post" action="">
<h3>Oppgave3</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="Bilder/kl4.png"><br/>
<input type="radio" name="svar" value="1"/>6
<input type="radio" name="svar" value="2"/>2
<input type="radio" name="svar" value="3"/>4
<input type="radio" name="svar" value="4"/>8<br/>

<input type="submit" value="Svar" id="regsvarknapp" name="regsvarknapp"/>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>
</body>
</html>

<?php
@$regsvarknapp=$_POST["regsvarknapp"];
if($regsvarknapp)
{
  $svar=$_POST["svar"];
  if($svar!=3)
  {
    print("Svaret er dessverre feil, riktig svar er 4<br/>");
    print("<a href='Oppg1-4.php'>Neste oppgave</a>");
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg1-4.php'>Neste oppgave</a>");
    
  }


}
include("slutt.html");
?>