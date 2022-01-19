<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker servidor t7</title>
    
</head>
<body>
<?php
$mysqli = new mysqli("db","root","MYSQL_ROOT_PASSWORD","registros");

// Check connection
if ($mysqli -> connect_errno) {
  echo "No se pudo conectar a MySQL: " . $mysqli -> connect_error;
  exit();
}
$query = "SELECT * FROM usuarios ";
$query1 = "SELECT * FROM vehiculos ";
mysqli_query($mysqli, $query) or die('Error al buscar en la base de datos.');
mysqli_query($mysqli, $query1) or die('Error al buscar en la base de datos.');

$resultado = mysqli_query($mysqli, $query);
$resultado1 = mysqli_query($mysqli, $query1);
?>
<h1>Clientes</h1>
<?php 
//$fila = mysqli_fetch_array($resultado);
while ($fila = mysqli_fetch_array($resultado)) {
echo $fila['nombre'] . ' ' . $fila['apellidos'] .'<br />';
}
?>
<h1>Coches</h1>
<?php
while ($fila1 = mysqli_fetch_array($resultado1)) {
  echo $fila1['marca'].' '.$fila1['modelo'] .'<br />';
}

mysqli_close($mysqli);


?>
</body>
</html>