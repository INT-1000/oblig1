<html>
<body>
<form method="post" action="">
<h3>Oppgave1</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="klhalv2.png"/><br/>
<input type="radio" name="svar" value="1"/>Halv 2
<input type="radio" name="svar" value="2"/>Halv 5
<input type="radio" name="svar" value="3"/>Halv 8
<input type="radio" name="svar" value="4"/>Halv 1<br/>

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
  if($svar!=1)
  {
    print("Svaret er dessverre feil, riktig svar er halv 2<br/>");
    print("<a href='Oppg2-2.php'>Neste oppgave</a>");
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg2-2.php'>Neste oppgave</a>");
    
  }


}
?>