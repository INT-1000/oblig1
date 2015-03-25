<?php include("forside.html");?>
<html>
<body>
<form method="post" action="">
<h3>Oppgave 1</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="Bilder/kvartover4.png"/><br/>
<input type="radio" name="svar" value="1"/>Kvart over 4
<input type="radio" name="svar" value="2"/>Kvart over 6
<input type="radio" name="svar" value="3"/>Kvart over 8
<input type="radio" name="svar" value="4"/>Kvart over 3<br/>

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
    print("Svaret er dessverre feil, riktig svar er kvart over 4<br/>");
    print("<a href='Oppg3-2.php'>Neste oppgave</a>");
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg3-2.php'>Neste oppgave</a>");
    
  }


}
include("slutt.html");
?>