<?php 

	session_commit();

	$db = mysqli_connect("localhost", "root", "", "agile");

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$sql = "INSERT INTO feedback(name, email, message) VALUES('$name', '$email', '$message')";
		mysqli_query($db, $sql);
		header("location: feedback.html");
	}


