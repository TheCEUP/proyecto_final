<?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $database = "php";
  $sql = "CREATE DATABASE IF NOT EXISTS $database";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error creating database: " . $conn->error;
  }

  $conn->select_db($database);

  $sql = "CREATE TABLE IF NOT EXISTS users (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(30) NOT NULL,
          password VARCHAR(50) NOT NULL
  )";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background: #eef5f9">
  <div class="card" style="margin-top: 9%; margin-left: 100px; margin-right: 100px; padding: 100px">
    <center><h2>Login Form</h2><center>
    <div class="card-body">
      <form action="login.php" method="POST">
        <div class="form-floating">
          <input class="form-control" id="username" name="username"><br>
          <label for="username">Username:</label>
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" class="form-control"><br>
          <label for="password">Password:</label>
        </div>
        <div style="display: flex">
          <div style="width: 50%">
            <input type="submit" value="Login" class="btn btn-group w-100 btn-primary mb-3 p-3 me-2">
          </div>
          <div style="width: 50%">
            <a href="signup_form.php" class="btn btn-group w-100 btn-primary mb-3 p-3 ms-2">Signup</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
