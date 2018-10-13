<?php	
	require_once 'login.php';
	$conn = new mysqli($hn,$un,$pw,$db);
	session_start();
	$_SESSION['username'] = '';

	if ($_SERVER['REQUEST_METHOD']=='GET') {
		$username = $_GET['username'];
		$password = $_GET['password'];
		$query = "SELECT * FROM signin WHERE username = '$username' AND password = '$password'";
		$result = $conn->query($query);
		$check = mysqli_fetch_array($result);
		if(isset($check)) {
			if(isset($_SESSION["username"])) {
				$_SESSION['usernamedisp'] = $username;
				header("Location:home.php");
			}
		} else {
			echo "failure";

		}

		$query = "SELECT * FROM signin WHERE mail = '$username' AND password = '$password'";
		$result = $conn->query($query);
		$check = mysqli_fetch_array($result);
		if(isset($check)) {
			header("Location:home.php");
		}
	} 


?>


