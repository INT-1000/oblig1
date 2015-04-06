<?php include("logo.html");?>
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<div class="innhold">
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
    print("Svaret er dessverre feil, riktig svar er kvart over 4<br/>");
    print("<a href='Oppg3-2.php'>Neste oppgave</a>");
    print("</div>");
  }
  else
  {
    print("<div id='svar'>");
    print("Garatulerer, du svarte korrekt<br/>");
    print("<a href='Oppg3-2.php'>Neste oppgave</a>");
    print("</div>");
  }


}

?>