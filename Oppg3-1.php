
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
<form method="post" action="Oppg3-2.php">
<h3>Oppgave 1</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img alt="Storeviseren er på 3 og lilleviser er på 4" src="Bilder/kvartover4.png"/><br/>
<input type="radio" name="svar" value="1"/>Kvart over 4
<input type="radio" name="svar" value="2"/>Kvart over 6
<input type="radio" name="svar" value="3"/>Kvart over 8
<input type="radio" name="svar" value="4"/>Kvart over 3<br/>

<input type="submit" value="Svar" id="regsvar" name="regsvar"/>
</form>
</div>
</body>
</html>

<?php
@$regsvar=$_POST["regsvar"];
$poeng=0;                     //lager variabel $poeng og setter den til 0
if($regsvar)
{
  $svar=$_POST["svar"];             //Henter input fra html-skjema
  $poeng=$_SESSION["poeng"];            //setter SESSION-variabel poeng
  if($svar=="1")                  //GIR DEG SVAR PÅ FORRIGE side3.php
  {
    print("<div id='svar'>");
    print("Kvar over 4 er korrekt<br/>");       
    $poeng++;                 //øker poeng med 1
    $_SESSION["poeng"]=$poeng;          //Lagrer Session variabel etter endring
    print("du har $poeng poeng!<br/>");
    print("</div>");      //sier hvor mange poeng du har
  }

  else                      //Hvis feil, gjør dette
  {
    print("<div id='svar'>");
    print("Svar er feil. Kvart over 4 er riktig<br/>"); //Sier hva du svarte og hva som var korrekt
    print("du har $poeng poeng!<br/>");
    print("</div>");        
  }

$poeng=$_SESSION["poeng"];
}
}
?>
