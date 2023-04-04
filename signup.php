<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$conn = mysqli_connect("localhost", "root", "", "php");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM users WHERE username='$username'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$_SESSION["signup_error"] = "Username already taken";
		header("Location: signup_form.php");
		exit();
	}

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
	mysqli_query($conn, $sql);

	mysqli_close($conn);

	$_SESSION["signup_success"] = "Signup successful! Please login.";
	header("Location: index.php");
	exit();
}
?>