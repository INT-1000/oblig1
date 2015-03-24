<html>
<body>
<form method="post" action="">
<h3>Oppgave 2</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="kl11.png"><br/>
<input type="radio" name="svar" value="1"/>5
<input type="radio" name="svar" value="2"/>12
<input type="radio" name="svar" value="3"/>3
<input type="radio" name="svar" value="4"/>11<br/>

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
    print("Svaret er dessverre feil, riktig svar er 11<br/>");
    print("<a href='Oppg1-3.php'>Neste oppgave</a>");
    
  }
  else
  {
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg1-3.php'>Neste oppgave</a>");
    
  }


}
?>