<?php
	
	session_start();
	$username1 = $_SESSION['usernamedisp'];
	echo "<p style='color:red; position:fixed; left:85vw; top:47vh; font-size:25px;'>".$username1."</p>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Known.</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<script type="text/javascript" src="home.js"></script>
</head>
<body>
	<form action="home.php" onload="return homedisp()" >
		<nav id="home">
				<img src="hello.jpg" class="logo">
				<h3>USER KNOWN</h3>
			<ul class="main-nav">
				<li class="home"><a href="home.html">Home</a></li>
				<li class="notification"><a href="notifications.html">Notification</a></li>
				<li class="aboutus"><a href="aboutus.html"> About us</a></li>
				<li class="signout"><a href="signin.html">Sign out</a></li>
			</ul>
		</nav>
		<div class="v1"></div>
		<div class="v2"></div>
	</form>
	<div class="image">
		Hello
	</div>
</body>
</html>