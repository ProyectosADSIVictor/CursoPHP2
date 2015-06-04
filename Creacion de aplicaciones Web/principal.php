 <html>
<head>
	<meta charset="UTF-8">
</head>
</html>
<?php

session_start();
include("log.php");

echo "Tu Usuario es: ".$_SESSION['usuario']."";
echo "<br>Tu Clave es: ".$_SESSION['contrasena']."";


//conexion
$conexion = new PDO('sqlite:favoritos.sqlite');  

$consult =  ("SELECT * FROM favoritos WHERE usuario='".$_SESSION['usuario']."' AND contrasena='". $_SESSION['contrasena']."'");

echo '
<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td></td>
<td></td>
</tr>';

$result = $conexion->query($consult);

foreach($result as $fila){
	
	echo "<tr>
	<td>".$fila['titulo']."</td>
	<td>".$fila['direccion']."</td>
	<td>".$fila['categoria']."</td>
	<td>".$fila['comentario']."</td>
	<td>".$fila['valoracion']."</td>

	<td><a href='eliminarfavorito.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Eliminar</a></td>
	
	
	<td><a href='formactualizar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Actualizar</a></td></tr>";

}
echo "
<tr>
<form action='crearfavorito.php' method='POST'>
<td><input type='text' name='titulo'></td>
<td><input type='text' name='direccion'></td>
<td><select name='categoria'>
<option value='salud'>Salud</option>
<option value='trabajo'>Trabajo</option>
<option value='hobby'>Hobby</option>
<option value='personal'>Personal</option>
<option value='Tecnologia'>Tecnologia</option>
<option value='Otro'>Otro</option>
</select>
</td>
<td><input type='text' name='comentario'></td>
<td><input type='text' name='valoracion'></td>
<td><input type='submit'></td>
<td></td>
</tr>

";

echo "</table>";
$conexion = null;
////////////////////////////////////////////////////////
echo "<br>";
function muestraCategoria($damecategoria){
echo "Algunos links de la categoria ".$damecategoria." que te puedan interesar<br>";
$conexion = new PDO('sqlite:favoritos.sqlite'); 
$consulta = "SELECT * FROM favoritos WHERE usuario != '".$_SESSION['usuario']."' AND categoria= '".$damecategoria."' ORDER BY RANDOM() LIMIT 3;";
$result = $conexion->query($consulta);
echo "<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td></td>
<td></td>
</tr>";
foreach($result as $fila){
	
	echo "<tr>
	<td>".$fila['titulo']."</td>
	<td>".$fila['direccion']."</td>
	<td>".$fila['categoria']."</td>
	<td>".$fila['comentario']."</td>
	<td>".$fila['valoracion']."</td>
	<td></td>
	<td></td>";
	
}
echo "</table><br>";
$conexion = NULL;
}
muestraCategoria("salud");
muestraCategoria("trabajo");
muestraCategoria("hobby");
muestraCategoria("personal");
muestraCategoria("Tecnologia");
muestraCategoria("Otro");
?>