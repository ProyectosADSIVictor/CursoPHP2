<?php
$conexion = mysql_connect("localhost","Victor","Victor");
if (!$conexion) {
	die ("No se puede conectar".mysql_error());
}
//selecciono la bases de datos
mysql_select_db("agenda",$conexion);
//query
$select= mysql_query("select*from miagenda where Nombre='Marisol'");
//muestro los elementos de la db
while ($fila = mysql_fetch_array($select)) {

	echo $fila['Nombre']." | ".$fila['Apellido']." | ".$fila['Edad']." | ".$fila['Telefono'];
	echo "<br><br>"; 	
}
mysql_close($conexion);
?>	