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
	</head>
	<body class="homepage">
		<nav>
		<label class="logo"><a href="index.html"><img src="logo/football-logo.png" alt="#"></a></label>
			<div class="footyplay">Footyplay</div>
    		<input type="checkbox" id="click">
    		<label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
			<ul>
				<li><a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a></li>
				<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
			</ul>
		</nav>
		<div class="homepage-content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>