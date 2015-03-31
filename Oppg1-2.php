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
<?php include("logo.html");?>
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<div class="innhold">
<form method="post" action="Oppg1-3.php">
<h3>Oppgave 2</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img src="Bilder/kl11.png"><br/>
<input type="radio" name="svar" value="1"/>5
<input type="radio" name="svar" value="2"/>12
<input type="radio" name="svar" value="3"/>3
<input type="radio" name="svar" value="4"/>11<br/>

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
  $poeng=$_SESSION["poeng"];
  if($svar!="6")
  {
    print("<div id='svar'>");
    print("Svaret er dessverre feil, riktig svar er 11<br/>");
   
    print("</div>");
    
  }
  else
  {
    print("<div id='svar'>");
    print("Bra!<br/>");
    $poeng++;
    $_SESSION["poeng"]=$poeng;
    print("Du har$poeng");
    print("</div>");
    
  }


}
}
 
?>