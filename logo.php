<!DOCTYPE HTML>
<html>
<head>
<title>Forside</title>
<meta charset="utf-8">
<link href="style.css" type="text/css" rel="stylesheet" / >
</head>

<body>

<script>
 		function play(){
    	var audio = document.getElementById("audio");
    	audio.play();
        }
</script>

<audio id="audio" src="https://home.hbv.no/884607/app/sounds/applause.mp3" ></audio>

<div id="logo">
<a href="forside.html">KAKUS MATTIMUS</a>

<?php
//print("fungerer dette?");
@$poeng=$_SESSION["poeng"];
unset($_SESSION["poeng"]); 
?>

</div>

<div id="meny">

<a href="KNivavelger.php">Klokken</a>
<a href="pnivavelger.php">Pluss og minus</a>
<a href="cronivavelger.php">Krokodilletegn</a>
<a href="dnd.php">Drag & Drop</a>

</div>
</body>
</html>