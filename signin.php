<?php

	require_once 'login.php';
	$conn = new mysqli($hn,$un,$pw,$db);

	if ($_SERVER['REQUEST_METHOD']=='GET') {
		$username = $_GET['username'];
		$password = $_GET['password'];
		$query = "SELECT * FROM signin WHERE username = '$username' AND password = '$password'";
		$result = $conn->query($query);
		$check = mysqli_fetch_array($result);
		if(isset($check)) {
			echo 'success';
		} else {
			echo 'failure';
		}

	}

?>