<html>
<body>
<form method="post" action="">
<h3>Oppgave 4</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="kvartpå1.png"/><br/>
<input type="radio" name="svar" value="1"/>Kvart på 2
<input type="radio" name="svar" value="2"/>Kvart på 5
<input type="radio" name="svar" value="3"/>Kvart på 1
<input type="radio" name="svar" value="4"/>Kvart på 11<br/>

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
    print("Svaret er dessverre feil, riktig svar er kvart på 1<br/>");
    print("<a href='Oppg3-5.php'>Neste oppgave</a>");
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg3-5.php'>Neste oppgave</a>");
    
  }


}
?>