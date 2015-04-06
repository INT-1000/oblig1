
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
<form method="post" action="Oppg3-6.php">
<h3>Oppgave 5</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img alt="Storeviseren er på 9 og lilleviseren er snart på 3" src="Bilder/kvartpå3.png"/><br/>
<input type="radio" name="svar" value="1"/>Kvart på 8
<input type="radio" name="svar" value="2"/>Kvart på 4
<input type="radio" name="svar" value="3"/>Kvart på 3
<input type="radio" name="svar" value="4"/>Kvart på 5<br/>

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
  if($svar=="3")                  //GIR DEG SVAR PÅ FORRIGE side1.php
  {
    print("<div id='svar'>");
    print("kvart på 1 er korrekt<br/>");       
    $poeng++;                 //øker poeng med 1
    $_SESSION["poeng"]=$poeng;          //Lagrer Session variabel etter endring
    print("du har $poeng poeng!<br/>"); 
    print("</div>");    //sier hvor mange poeng du har
  }
  else                      
  {
    print("<div id='svar'>");
    print("Svar er feil. kvart på 1 er riktig<br/>"); //Sier hva du svarte og hva som var korrekt
    print("du har $poeng poeng!<br/>"); 
    print("</div>");  
  }

$poeng=$_SESSION["poeng"];
}
}
?>