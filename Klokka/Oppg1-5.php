
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<form method="post" action="">
<h3>Oppgave5</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="Bilder/kl7.png"><br/>
<input type="radio" name="svar" value="1"/>6
<input type="radio" name="svar" value="2"/>7
<input type="radio" name="svar" value="3"/>9
<input type="radio" name="svar" value="4"/>5<br/>

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
  if($svar!=2)
  {
    print("Svaret er dessverre feil, riktig svar er 7<br/>");
    
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    
    
  }


}
include("slutt.html");
?>