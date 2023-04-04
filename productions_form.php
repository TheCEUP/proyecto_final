<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>Agregar a Inventario</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
      <div class="container mt-5">
        <h2>Agregar a Inventario</h2>
        <a href="dashboard.php" type="button" role="button" class="btn btn-group btn-danger">Cancelar</a>
      <form action="agregar_prod.php" method="POST">
        <div class="form-floating mb-3 mt-3">
          <input type="text" id="nombre" name="nombre" class="form-control">
          <label for="nombre">Nombre:</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" id="tipo" name="tipo" class="form-control">
          <label for="tipo">Tipo:</label>
        </div>
        <div class="form-floating mb-3">
          <input type="number" id="cantidad" name="cantidad" class="form-control">
          <label for="cantidad">Cantidad:</label>
        </div>
        <div class="form-floating mb-3">
          <input type="date" id="fecha" name="fecha" class="form-control">
          <label for="fecha">Fecha:</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" id="proveedor" name="proveedor" class="form-control">
          <label for="proveedor">Proveedor:</label>
        </div>
        <div class="form-floating mb-3">
          <input type="datetime-local" id="fecha_salida" name="fecha_salida" class="form-control">
          <label for="fecha_salida">Fecha de Salida:</label>
        </div>
        <input type="submit" value="Agregar" class="btn btn-primary">
      </form>
    </div>
  </body>
</html>