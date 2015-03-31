<?php include("logo.html");
 ?>

<?php
  session_start();
  @$innloggetBruker=$_SESSION["brukernavn"];

  if(!$innloggetBruker)
  {
    print("Denne siden krever innlogging <br />");
  }
  else
  {
    
?>
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<div class="innhold">
<form method="post" action="Oppg1-2.php">

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
$poeng=0;
if($regsvarknapp)
{
  $svar=$_POST["svar"];
  $poeng=$_SESSION["poeng"];
  if($svar!=6)
  {
    print("<div id='svar'>");
    print("Svaret er dessverre feil, riktig svar er 6<br/>");          
    print("du har $poeng poeng!<br/>"); 
    print("<a href='Oppg1-2.php'>Neste oppgave</a>");
    print("</div>");
  }
  else
  {
    print("<div id='svar'>");
    print("Garatulerer, du svarte korrekt<br/>");
    $poeng++;                 
    $_SESSION["poeng"]=$poeng;          
    print("du har $poeng poeng!<br/>"); 
    print("<a href='Oppg1-2.php'>Neste oppgave</a>");
    print("</div>");
    
  }

$poeng=$_SESSION["poeng"];
}

}

?>