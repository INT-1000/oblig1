<?php include("forside.html");?>
<html>
<body>
<form method="post" action="">
<h3>Oppgave 5</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="Bilder/klhalv9.png"/><br/>
<input type="radio" name="svar" value="1"/>Halv 12
<input type="radio" name="svar" value="2"/>Halv 5
<input type="radio" name="svar" value="3"/>Halv 9
<input type="radio" name="svar" value="4"/>Halv 10<br/>

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
    print("Svaret er dessverre feil, riktig svar er halv 9<br/>");
   
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
   
    
  }


}
include("slutt.html");
?>