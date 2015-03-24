<html>
<body>
<form method="post" action="">
<h3>Oppgave 5</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="kvartpå3.png"/><br/>
<input type="radio" name="svar" value="1"/>Kvart på 8
<input type="radio" name="svar" value="2"/>Kvart på 4
<input type="radio" name="svar" value="3"/>Kvart på 3
<input type="radio" name="svar" value="4"/>Kvart på 5<br/>

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
    print("Svaret er dessverre feil, riktig svar er kvart på 3<br/>");
    
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    
    
  }


}
?>