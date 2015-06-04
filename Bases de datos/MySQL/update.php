<?php
$conexion = mysql_connect("localhost","Victor","Victor");
if (!$conexion) {
	die ("No se puede conectar".mysql_error());
}
//selecciono la bases de datos
mysql_select_db("agenda",$conexion);
//query
$select= mysql_query("update miagenda set edad= '21' where IdPersona=8");


mysql_close($conexion);
?>	