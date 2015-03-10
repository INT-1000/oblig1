<!doctype html>
<html lang="en">
<head>
 
<title>A jQuery Drag-and-Drop Number Cards Game</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<script src="function.js"> </script>
 
</head>

<body>
 
<div id="content">
 
  <div id="cardPile"> </div>
  <div id="cardSlots"> </div>
 
  <div id="successMessage">
    <h2>You did it!</h2>
    <button onclick="init()">Play Again</button>
  </div>
 
</div>
 
</body>
</html>