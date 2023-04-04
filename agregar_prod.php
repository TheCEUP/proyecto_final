<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Obtener los valores del formulario
  $nombre = $_POST["nombre"];
  $tipo = $_POST["tipo"];
  $cantidad = $_POST["cantidad"];
  $fecha = $_POST["fecha"];
  $proveedor = $_POST["proveedor"];
  $fecha_salida = $_POST["fecha_salida"];

  // Insertar los valores en la base de datos
  $sql = "INSERT INTO inventario (nombre, tipo, cantidad, fecha, proveedor, fecha_salida) VALUES ('$nombre', '$tipo', '$cantidad', '$fecha', '$proveedor', '$fecha_salida')";

  if ($conn->query($sql) === TRUE) {
    echo "Producto agregado correctamente.";
    header("Location: dashboard.php");
  } else {
    echo "<div>Error: " . $sql . "<br>" . $conn->error . "</div>";
  }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
