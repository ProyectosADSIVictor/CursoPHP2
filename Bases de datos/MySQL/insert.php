<?php
$conexion = mysql_connect("localhost","Victor","Victor");
if (!$conexion) {
	die ("No se puede conectar".mysql_error());
}

mysql_select_db("agenda",$conexion);

mysql_query("insert into miagenda(Nombre,Apellido, Edad,Telefono) values ('Alberto','Osma',23,3217639820)");
mysql_query("insert into miagenda(Nombre,Apellido, Edad,Telefono) values ('Erlinda','Limas',17,3165545640)");

mysql_close($conexion);
?>