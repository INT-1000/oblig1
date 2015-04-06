
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
<form method="post" action="Oppg3-3.php">
<h3>Oppgave 2</h3><br/>
<h4>Hvor mye er klokken?</h4><br/>
<img alt="Storeviser er på 3 og lilleviser er på 12" src="Bilder/kvartover12.png"/><br/>
<input type="radio" name="svar" value="1"/>Kvart over 4
<input type="radio" name="svar" value="2"/>Kvart over 6
<input type="radio" name="svar" value="3"/>Kvart over 10
<input type="radio" name="svar" value="4"/>Kvart over 12<br/>

<input type="submit" value="svar" id="regsvar" name="regsvar"/>
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
  if($svar=="1")                  //GIR DEG SVAR PÅ FORRIGE side1.php
  {
    print("<div id='svar'>");
    print("Kvart over 4 er korrekt<br/>");       
    $poeng++;                 //øker poeng med 1
    $_SESSION["poeng"]=$poeng;          //Lagrer Session variabel etter endring
    print("du har $poeng poeng!<br/>"); 
    print("</div>");    //sier hvor mange poeng du har
  }
  else                      
  {
    print("<div id='svar'>");
    print("Svar er feil. kvart over 4 er riktig<br/>"); //Sier hva du svarte og hva som var korrekt
    print("du har $poeng poeng!<br/>"); 
    print("</div>");  
  }

$poeng=$_SESSION["poeng"];
}
}
?>