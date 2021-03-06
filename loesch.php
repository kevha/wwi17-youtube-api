
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Webseite</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" />

  <!-- bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="kanalsuche.js"></script>
  <script src="https://apis.google.com/js/client.js?onload=init"></script>

</head>




<body>

<!-- Navigations Leiste -->
<nav class="navbar navbar-dark bg-dark justify-content-between">
  <a class="navbar-brand" href="index.php" style="color;">
    <img img src="img/stern.png" height="35" width="35" /></img>
    Startseite
  </a>
  <a class="navbar-brand" style="color:Grey;" href="videosuche.html">
    <img img src="img/video.svg" height="35" width="50"/></img>
    Video suchen
  </a>
  <a class="navbar-brand" style="color:Grey;" href="kanalsuche.html">
    <img img src="img/kanal.png" height="35" width="40"/></img>
    Kanal suchen
  </a>

  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" id="search" placeholder="Seite wechseln" aria-label="Search" disabled>
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" disabled>Suche</button>
  </form>
</nav>

</html>

<?php
  $nocookie="true";
  setcookie("youapiwwi","",time() - 3600);
  setcookie("youzaehler","",time() - 3600);
?>
<br>

	<div id="ausenblockCookie">
   <block3 class="center">
     Die Cookies wurden gelöscht.<br>
	<br>
     <a href="index.php">Zurück zur  Homepage!</a>
	 </block3>
  </div>




</body>
