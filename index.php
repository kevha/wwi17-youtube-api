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




<div class="grid-container">
  <div id="ausenblock1">
  <div id="ausenblock2">
  <a href="kanalsuche.html">
    <block1 class="center">
      <div class="grid-item">Kanalsuche</div>
    </block1>
  </a>

  <a href="videosuche.html">
    <block2 class="center">
      <div class="grid-item">Videosuche</div>
    </block2>
  </a>
  </div>

  <div id="ausenblock3">
  <block5 class="center">
    
	
</block5>
  <block4 class="center">
    <p><center><h1><b>Informationen</b></h1></center>
	</p>Gehe auf eine der zwei Webseiten.<br>
	Gebe einen Suchbegriff ein und klicke auf suchen.<br>
	<b>VIEL SPAß</b>
	
</block4>
	</div>
	
	 <div id="ausenblock4">
		<block3 class="center">
		<?php
	
	$cookie = "1";
	$zaehler= "1";
	if (isset ($_COOKIE['youapiwwi'])) { 
     $cookie = $_COOKIE['youapiwwi'];
	}  
	if (isset ($_COOKIE['youzaehler'])) { 
     $zaehler = $_COOKIE['youzaehler'];
	 $zaehler=$zaehler+"1";
	 setcookie("youzaehler",$zaehler,time()+(3600*24));	
	}

	if($cookie == "0" ){
		echo "Willkommen zurück. Schön das du wieder da bist!";
	}
	else{
		echo "Willkommen auf unserer Seite! Wir hoffen dir gefällt es hier";
		setcookie("youapiwwi","0",time()+(3600*24));
	}
	if($zaehler == "1" ){
		echo "<p>Du bist das erste mal auf unserer Homepage!</p>";
		setcookie("youzaehler","1",time()+(3600*24));	
			
	}
	else{
		echo "<p>Du bist das ".$zaehler.". mal auf unserer Homepage!</p>";	
	}
?>
		</block3">
  </div>
	<div id="ausenblock5">
	<block6 class="center">
	Die Seite generiert Cookies.<br>
	Um diese Cookies zu löschen klicke folgenden Link:<br>
	
   
    <a href="loesch.php"> Cookies löschen </a> 
	 </block6>
  </a>
  </div>

  
  </div>
  </div>



</body>

</html>
