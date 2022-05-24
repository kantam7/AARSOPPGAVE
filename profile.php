<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = '192.168.1.2';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'admin12345';
$DATABASE_NAME = 'footyplay_db';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email, favTeam FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $favTeam);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="icon" href="logo/football-logo.png">
	</head>
	<body class="profile">
		<nav>
			<div class="logo-area">
      			<label class="logo"><a href="home.php"><img src="logo/football-logo.png" alt="#"></a></label>
      			<label class="footyplay"><a href="index.html" style="text-decoration: none; color: white;" >Footyplay</a></label>
    		</div>
    		<input type="checkbox" id="click">
    		<label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
			<ul>
				<li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
				<li><a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a></li>
				<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
			</ul>
		</nav>
		<div class="profile-content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
					<tr>
						<td>Favorite team:</td>
						<td><?=$favTeam?></td> 
					</tr>
				</table>
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>