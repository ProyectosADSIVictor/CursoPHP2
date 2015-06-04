<?php
$conexion = mysql_connect("localhost","Victor","Victor");
if (!$conexion) {
	die ("No se puede conectar".mysql_error());
}
//selecciono la bases de datos
mysql_select_db("agenda",$conexion);
//query
$select= mysql_query("delete from miagenda where IdPersona=16");


mysql_close($conexion);
?>	