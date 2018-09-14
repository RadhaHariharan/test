<?php
	
	session_start();
	$username1 = $_SESSION['usernamedisp'];
	echo "<p style='color:red; position:fixed; left:30vw; top:30vh;'>".$username1."</p>";
	
	
?>