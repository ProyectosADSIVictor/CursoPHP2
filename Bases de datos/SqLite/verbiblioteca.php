<html>
<head>
<meta charset="utf-8"/>

</head>
</html>
<?php
echo "<h3>Lista de todas las canciones</h3>";
echo"<table border=1><tr><td>Artista</td><td>Disco</td><td>Año</td></tr></th>";

$conexion =  new PDO('sqlite:biblioteca.sqlite'); 

$consulta = "SELECT * FROM discos;";
$data = $conexion->query($consulta);

foreach ($data as $row) {
	echo "<tr><td>".$row['artista']."</td><td>".$row['disco']."</td><td>".$row['anio']."</td></tr>";	
}

echo "</table>";
//-----------------------------------------------
echo "<h3>Lista de canciones de Maluma</h3>";
echo"<table border=1><tr><td>Artista</td><td>Disco</td><td>Año</td></tr></th>";
 

$consulta = "SELECT * FROM Discos WHERE artista='Maluma' ORDER BY Anio DESC;";
$data = $conexion->query($consulta);

foreach ($data as $row) {
	echo "<tr><td>".$row['artista']."</td><td>".$row['disco']."</td><td>".$row['anio']."</td></tr>";	
}

echo "</table>";


?>