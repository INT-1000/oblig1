<?php include("logo.html");?>
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<div class="innhold">
<form method="post" action="">

<h3>Oppgave 1</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="Bilder/kl6.png"/><br/>
<input type="radio" name="svar" value="1"/>6
<input type="radio" name="svar" value="2"/>2
<input type="radio" name="svar" value="3"/>9
<input type="radio" name="svar" value="4"/>5<br/>

<input type="submit" value="Svar" id="regsvarknapp" name="regsvarknapp"/>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>

</form>
</div>
</body>
</html>

<?php
@$regsvarknapp=$_POST["regsvarknapp"];
if($regsvarknapp)
{
  $svar=$_POST["svar"];
  if($svar!=1)
  {
    print("<div id='svar'>");
    print("Svaret er dessverre feil, riktig svar er 6<br/>");
    print("<a href='Oppg1-2.php'>Neste oppgave</a>");
    print("</div>");
  }
  else
  {
    print("<div id='svar'>");
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg1-2.php'>Neste oppgave</a>");
    print("</div>");
    
  }


}

?>