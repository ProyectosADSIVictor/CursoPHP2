<?php
$conexion = new PDO('sqlite:database/blogs.sqlite');
$consultaposts = "CREATE TABLE posts(
utc Int Not Null,
anio Int Not Null,
mes Int Not Null,
dia Int Not Null,
hora Int Not Null,
minuto Int Not Null,
segundo Int Not Null,
titulo Char(120) Not Null,
subtitulo Char(120) Not Null,
icono Char(80) Not Null,
texto Char(4000) Not Null,
imagen Char(200) Not Null,
video Char(200) Not Null,
sonido Char(200) Not Null)";

$consultaconf = "CREATE TABLE configusuario(
usuario Char(40)Not Null,
piel Char(100)Not Null,
respuestas Char(40))";

$consultausu= "CREATE TABLE usuarios(
usuario Char(40)Not Null,
contrasena Char(40)Not Null,
nombre Char(100)Not Null,
apellidouno Char(40)Not Null,
apellidodos Char(40)Not Null,
titulo Char(40) Not Null,
descripcion Char(1500) Not Null,
foto Char(40),
webpersonal Char(80),
email Char(80) Not Null,
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
operacion Char(80))";

$posts=$conexion->exec($consultaposts);
$configuracion=$conexion->exec($consultaconf);
$usuarios=$conexion->exec($consultausu);
$logs = $conexion->exec($consultalogs);


$insert = $conexion->query("INSERT INTO usuarios Values ('victor','1234','Victor','Rodriguez','Gutierrez','Desarrollador de Software','Mi Descripcion','Victor Rodriguez','http://facebook.com','vhrodriguez19@gmail.com',1)");
$insert = $conexion->query("INSERT INTO configusuario Values ('soyvictor','default','si')");
$insert = $conexion->query("INSERT INTO posts Values (09087,2013,11,23,12,34,05,'Mi log titulo','Mi log subtitulo','Icono','Texto','Imagen','Video','sonido')");

$insert = $conexion->exec("INSERT INTO logs Values (1234567,2014,11,04,23,56,27,'127.0.0.1','Internet Explorer','victor','crear logs')");

?>