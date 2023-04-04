<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<h2>Dashboard</h2>
    <a href="productions_form.php" type="button" role="button" class="btn btn-group btn-primary">Agregar Productos</a>
		<!-- Productos más fabricados -->
		<div class="card mt-5">
			<div class="card-header">
				Productos más fabricados
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Tipo</th>
							<th>Cantidad</th>
						</tr>
					</thead>
					<tbody>
						<?php
							// Conexión a la base de datos
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "php";

							$conn = mysqli_connect($servername, $username, $password, $dbname);

							// Obtener productos más fabricados
							$sql = "SELECT nombre, tipo, SUM(cantidad) AS total_cantidad FROM inventario GROUP BY nombre, tipo ORDER BY total_cantidad DESC LIMIT 5";
							$result = mysqli_query($conn, $sql);

							// Imprimir resultados
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["tipo"] . "</td><td>" . $row["total_cantidad"] . "</td></tr>";
								}
							} else {
								echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
							}

							// Cerrar conexión
							mysqli_close($conn);
						?>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Roles de los usuarios -->
		<div class="card mt-5">
			<div class="card-header">
				Roles de los usuarios
			</div>
			<div class="card-body">
				<p>Administrador</p>
				<p>Usuario</p>
				<p>Invitado</p>
			</div>
		</div>

		<!-- Productos que están por salir -->
		<div class="card mt-5">
			<div class="card-header">
				Productos que están por salir
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Tipo</th>
							<th>Cantidad</th>
							<th>Fecha</th>
						</tr>
					</thead>
					<tbody>
						<?php
							// Conexión a la base de datos
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "php";

							$conn = mysqli_connect($servername, $username, $password, $dbname);
              						
						  $sql = "SELECT nombre, tipo, cantidad, fecha_salida FROM inventario WHERE fecha_salida >= NOW() ORDER BY fecha_salida ASC";
						  $result = mysqli_query($conn, $sql);

						// Imprimir resultados
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["tipo"] . "</td><td>" . $row["cantidad"] . "</td><td>" . $row["fecha_salida"] . "</td></tr>";
							}
						} else {
							echo "<tr><td colspan='4'>No se encontraron resultados.</td></tr>";
						}

						// Cerrar conexión
						mysqli_close($conn);
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-zQi1BHJktpyx8xv/Bk/uOlrw/OcneDBTxrPCo0MKPWGyM0LG9hzRrWgLY8t1kx3q" crossorigin="anonymous"></script>
