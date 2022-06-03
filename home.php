<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" href="logo/football-logo.png">
</head>
<body class="homepage">
	<nav>
		<div class="logo-area">
      		<label class="logo"><a href="home.php"><img src="logo/football-logo.png" alt="#"></a></label>
      		<label class="footyplay"><a href="index.html" style="text-decoration: none; color: white;" >Footyplay</a></label>
    	</div>
		<input type="checkbox" id="click">
		<label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
		<ul>
			<li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
			<li><a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a></li>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
		</ul>
	</nav>
	<div class="homepage-content">
		<h2>Home Page</h2>
		<p>Welcome back, <?=$_SESSION['name']?>!</p>
	</div>
	<!--SLIDESHOW-->
	<div class="image-slideshow">
		<div>
	    	<a href="https://www.uefa.com/uefachampionsleague/match/2034586--liverpool-vs-real-madrid/"><img src="images/liv-rea.jpg" width="auto" height="563px" alt=""></a>
	    	<div>
	        	<h2>Example Photo 1</h2>
	            <p>Example description for the photo...</p>
	        </div>
	    </div>
		<div>
      <a href="https://www.mancity.com/news/mens/manchester-city-parade-63788833"><img src="images/trophy-lift-2122-overlay.jpg" width="auto" height="563px" alt=""></a>
	        <div>
	        	<h2>Example Photo 2</h2>
	            <p>Example description for the photo...</p>
	        </div>
	    </div>
		<div>
      <a href="https://www.mancity.com/news/mens/manchester-city-parade-63788833"><img src="images/liverpool-fa-cup.jpg" width="auto" height="563px" alt=""></a>
	        <div>
	        	<h2>Example Photo 3</h2>
	            <p>Example description for the photo...</p>
	        </div>
	    </div>
	</div>
	<div id="fs-standings"></div>
	<div class="grid-container">
      <iframe class="video" width="420" height="315" src="https://www.youtube.com/embed/Q-s0OqlZnMY" frameborder="0" allowfullscreen></iframe>
      <h3><a id=video-btn href="#" onclick="document.getElementById('id03').style.display='block'"> Watford vs Arsenal (2-3)</a></h3>
  
      <iframe class="video" width="420" height="315" src="//youtube.com/embed/2Moaw6Q4iRg" frameborder="0" allowfullscreen></iframe>
      <h3><a id=video-btn href="#" onclick="document.getElementById('id03').style.display='block'"> Watford vs Arsenal (2-3)</a></h3>
  
      <iframe class="video" width="420" height="315" src="//www.youtube.com/embed/1sIWez9HAbA" frameborder="0" allowfullscreen></iframe>
      <h3><a id=video-btn href="#" onclick="document.getElementById('id03').style.display='block'"> Watford vs Arsenal (2-3)</a></h3>
  
      <iframe class="video" width="420" height="315" src="//www.youtube.com/embed/1sIWez9HAbA" frameborder="0" allowfullscreen></iframe>
      <h3><a id=video-btn href="#" onclick="document.getElementById('id03').style.display='block'"> Watford vs Arsenal (2-3)</a></h3>
    </div>

  <div id="id03" class="modal">
    <div class="animate"> <!--class for zoom animation-->
      <div class="modal-videos">
        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h1>HIGHLIGHTS | Watford vs Arsenal (2-3)</h1>
          <div class="container">
            <iframe id="video" width="500" height="281" src="https://youtube.com/embed/2Moaw6Q4iRg?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
      </div>
    </div>
  </div> 
  <script> 
  (function (w,d,s,o,f,js,fjs) {
    w['fsStandingsEmbed']=o;w[o] = w[o] || 
    function () { 
      (w[o].q = w[o].q || []).push(arguments) }; 
      js = d.createElement(s), fjs = d.getElementsByTagName(s)[0]; 
      js.id = o; js.src = f; js.async = 1; fjs.parentNode.insertBefore(js, fjs); }
      (window, document, 'script', 'mw', 'https://cdn.footystats.org/embeds/standings.js')); mw('params', { leagueID: 6135 }); 
      </script>
	<?php include 'footer.php';?>
<script src="js/script.js"></script>
</body>
</html>