<?php
$conexion = new PDO('sqlite:blogs.sqlite');  

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

$posts=$conexion->exec($consultaposts);
$configuracion=$conexion->exec($consultaconf);
$usuarios=$conexion->exec($consultausu);


$insert = $conexion->query("INSERT INTO usuarios Values ('soyvictor','1234','Victor','Rodriguez','Gutierrez','Desarrollador de Software','Mi Descripcion','Victor Rodriguez','http://facebook.com','vhrodriguez19@gmail.com',1)");
$insert = $conexion->query("INSERT INTO configusuario Values ('soyvictor','default','si')");
$insert = $conexion->query("INSERT INTO posts Values (09087,2013,11,23,12,34,05,'Mi log titulo','Mi log subtitulo','Icono','Texto','Imagen','Video','sonido')");

?>