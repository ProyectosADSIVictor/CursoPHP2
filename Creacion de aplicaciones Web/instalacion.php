<?php

$conexion = new PDO('sqlite:favoritos.sqlite');  

$consultafav = 
"CREATE TABLE favoritos(
usuario Char(40)Not Null,
contrasena Char(40)Not Null,
titulo Char(40) Not Null,
direccion Char(100)Not Null,
categoria Char(40),
comentario Char(200),
valoracion Int)";

$consultausu = 
"CREATE TABLE usuarios(
usuario Char(40)Not Null,
contrasena Char(40)Not Null,
nombre Char(100)Not Null,
apellido Char(40)Not Null,
edad Int,
permisos Int)";


$consultalogs="CREATE TABLE logs(
utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(50),
navegador Char(40),
usuario Char(40),
contrasena Char(40))";

$favoritos = $conexion->exec($consultafav);
$usuarios = $conexion->exec($consultausu);
$logs = $conexion->exec($consultalogs);

$insert = $conexion->exec("INSERT INTO favoritos VALUES('victor', 'victor', 'Facebook', 'http://www.facebook.com', 'Tecnologia', 'Esta es una red social', 10 )");
$insert = $conexion->exec("INSERT INTO favoritos VALUES('victor','victor','Google','http://www.google.com','Tecnologia','Este es un navegador web',10)");


$insert = $conexion->exec("INSERT INTO usuarios VALUES('victor', '12345', 'Victor', 'Rodriguez', 18, 1 )");
$insert = $conexion->exec("INSERT INTO usuarios VALUES('andrea','54321','Andrea','Plazas', 18,1)");


$insert = $conexion->exec("INSERT INTO logs Values (0000000,2011,04,23,17,03,00,'127.0.0.1','chrome','victor','victor')");
$insert = $conexion->exec("INSERT INTO logs Values (1234567,2014,11,04,23,56,27,'127.0.0.1','Internet Explorer','andres','1234567890')");

?>