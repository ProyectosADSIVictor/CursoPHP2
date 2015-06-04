<?php
//linea de conexion en php "servidor","usuario", "contraseña"
$conexion = mysql_connect("localhost","Victor","Victor");
if ($conexion) {
//finalizar si hay conexion
//sino mostrar el mensaje
	//echo "Conexion realizada correctamente";
}else {
	die('No se puede conectar a la base de datos '.mysql_error());
}
if (mysql_query("CREATE DATABASE Agenda", $conexion)) {
	echo "Base de datos creada correctamente";
}else{
	echo "Error al crear la bases de datos";
}
//prepara peticion
mysql_select_db("Agenda", $conexion);
$sql= "Create table MiAgenda
(
	IdPersona int NULL AUTO_INCREMENT,
	PRIMARY KEY(IdPersona),
	Nombre varchar(15),
	Apellido varchar(15),
	Edad int,
	Telefono int
)";
mysql_query($sql, $conexion);
//ejecutar peticion

//cerrar conexion
mysql_close($conexion);
?>