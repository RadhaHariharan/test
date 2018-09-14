<?php

	require_once 'login.php';
	$conn = new mysqli($hn,$un,$pw,$db);

	if(isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['username']) && isset($_GET['mail']) && isset($_GET['phone']) && isset($_GET['gender']) && isset($_GET['dob']) && isset($_GET['password']) && isset($_GET['repassword'])) {


		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
		$username = $_GET['username'];
		$mail = $_GET['mail'];
		$phone = $_GET['phone'];
		$gender = $_GET['gender'];
		$dob = $_GET['dob'];
		$password = $_GET['password'];
		$repassword = $_GET['repassword'];

		$query = "INSERT INTO signup(firstname,lastname,username,mail,phone,gender,dob,password,repassword) VALUES('$firstname','$lastname','$username','$mail','$phone','$gender','$dob','$password','$repassword')";

		$result = $conn->query($query);

		$query2 = "INSERT INTO signin(username,password,mail) VALUES('$username','$password','$mail')";
		$result2 = $conn->query($query2);

		$query3 = "CREATE TABLE $username(friends varchar(20))";
		$result3 = $conn->query($query3);
		header('Location:signup.html');

	}	
?>