<?php
$conexion = mysql_connect("localhost","Victor","Victor");
if (!$conexion) {
	die ("No se puede conectar".mysql_error());
}

mysql_select_db("agenda",$conexion);
mysql_query("insert into miagenda(Nombre,Apellido, Edad,Telefono) values ('Victor','Rodriguez',18,3125436265)");
mysql_query("insert into miagenda(Nombre,Apellido, Edad,Telefono) values ('Andrea','Plazas',18,3142986305)");
mysql_query("insert into miagenda(Nombre,Apellido, Edad,Telefono) values ('Marisol','Daza',19,31148838122)");
mysql_query("insert into miagenda(Nombre,Apellido, Edad,Telefono) values ('Camilo','Gutierrez',17,3132458912)");

mysql_close($conexion);
?>