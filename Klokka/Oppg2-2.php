<?php include("forside.html");?>
<html>
<body>
<form method="post" action="">
<h3>Oppgave 2</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="Bilder/klhalv3.png"/><br/>
<input type="radio" name="svar" value="1"/>Halv 2
<input type="radio" name="svar" value="2"/>Halv 5
<input type="radio" name="svar" value="3"/>Halv 6
<input type="radio" name="svar" value="4"/>Halv 3<br/>

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
  if($svar!=4)
  {
    print("Svaret er dessverre feil, riktig svar er halv 3<br/>");
    print("<a href='Oppg2-3.php'>Neste oppgave</a>");
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg2-3.php'>Neste oppgave</a>");
    
  }


}
include("slutt.html");
?>