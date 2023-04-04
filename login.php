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

	if (mysqli_num_rows($result) == 1) {
		$user = mysqli_fetch_assoc($result);
		if (password_verify($password, $user["password"])) {
			$_SESSION["user_id"] = $user["id"];
			header("Location: dashboard.php");
			exit();
		} else {
			$_SESSION["login_error"] = "Incorrect password";
			header("Location: index.php");
			exit();
		}
	} else {
		$_SESSION["login_error"] = "Username not found";
		header("Location: index.php");
		exit();
	}
	mysqli_close($conn);
}
?>