<?php

$conexion = new PDO('sqlite:biblioteca.sqlite');  
//echo "conexion realizada";
/*$consulta = 'CREATE TABLE discos(
artista VARCHAR(40) NOT NULL,
disco VARCHAR(40) NOT NULL,
anio Integer)';
$conexion=$conexion->exec($consulta);*/
$count = $conexion->exec("INSERT INTO discos(artista,disco,anio) VALUES ('Maluma','Carnavaal',2014)");
/*$insert = $conexion->exec("INSERT INTO discos(artista,disco,anio) VALUES ('Maluma', 'La Curiosidad', 2014)");
$insert = $conexion->exec("INSERT INTO discos(artista,disco,anio) VALUES ('Maluma', 'Obsecion', 2008)");

$insert = $conexion->exec("INSERT INTO discos(artista,disco,anio) VALUES ('Yelsid', 'El Bus', 2011)");
$insert = $conexion->exec("INSERT INTO discos(artista,disco,anio) VALUES ('Yelsid', 'Vengate Conmigo', 2013)");
$insert = $conexion->exec("INSERT INTO discos(artista,disco,anio) VALUES ('Yelsid', 'Enseñame a Mentir', 2010)");
*/
?>