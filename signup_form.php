<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<h2 class="text-center mb-4">Signup Form</h2>
				<form action="signup.php" method="POST">
					<div class="mb-3">
						<label for="username" class="form-label">Username:</label>
						<input type="text" id="username" name="username" class="form-control">
					</div>

					<div class="mb-3">
						<label for="password" class="form-label">Password:</label>
						<input type="password" id="password" name="password" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary">Signup</button>
				</form>
				<div class="text-center mt-3">
					<a href="index.php">Login</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
