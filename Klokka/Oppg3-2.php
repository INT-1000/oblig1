<?php include("forside.html");?>
<html>
<body>
<form method="post" action="">
<h3>Oppgave 2</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="Bilder/kvartover12.png"/><br/>
<input type="radio" name="svar" value="1"/>Kvart over 4
<input type="radio" name="svar" value="2"/>Kvart over 6
<input type="radio" name="svar" value="3"/>Kvart over 10
<input type="radio" name="svar" value="4"/>Kvart over 12<br/>

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
    print("Svaret er dessverre feil, riktig svar er kvart over 12<br/>");
    print("<a href='Oppg3-3.php'>Neste oppgave</a>");
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg3-3.php'>Neste oppgave</a>");
    
  }


}
include("slutt.html");
?>