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
<?php include("logo.php");?>
<html>
<head><link href="style.css" type="text/css" rel="stylesheet" / ></head>
<body>
<div class="innhold">
<form method="post" action="Oppg2-4.php">
<h3>Oppgave 3</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img alt="Storeviseren er på 6 og lilleviseren står mellom 4 og 5" src="Bilder/klhalv5.png"/><br/>
<input type="radio" name="svar" value="1"/>Halv 2
<input type="radio" name="svar" value="2"/>Halv 5
<input type="radio" name="svar" value="3"/>Halv 8
<input type="radio" name="svar" value="4"/>Halv 9<br/>

<input type="submit" value="Svar" id="regsvar" name="regsvar"/>
</form>
</div>
</body>
</html>

<?php
@$regsvar=$_POST["regsvar"];

if($regsvar)
{
  $svar=$_POST["svar"];             //Henter input fra html skjema
  $poeng=$_SESSION["poeng"];            //setter Session-variabel
  if($svar=="4")                  //GIR DEG SVAR PÅ FORRIGE side1.php
  {
    print("<div id='svar'>");
    print("Halv 3 er korrekt<br/>");       
    $poeng++;                 //øker poeng med 1
    $_SESSION["poeng"]=$poeng;          //Lagrer Session variabel etter endring
    print("du har $poeng poeng!<br/>"); 
    print("</div>");    //sier hvor mange poeng du har
  }
  else                      
  {
    print("<div id='svar'>");
    print("Svar er feil. Halv 3 er riktig<br/>"); //Sier hva du svarte og hva som var korrekt
    print("du har $poeng poeng!<br/>"); 
    print("</div>");  
  }

$poeng=$_SESSION["poeng"];
}
}
?>