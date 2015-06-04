<?php

session_start();
$utc = date("U");
$anio = date("Y");
$mes = date("m");
$dia = date("d");
$hora = date("H");
$minuto = date("i");
$segundo = date("s");
$usuariolog = $_SESSION['usuario'];
$contraseñalog = $_SESSION['contrasena'];

@$ip = getenv(REMOTE_ADDR);
$navegador = $_SERVER['HTTP_USER_AGENT'];

//conexion

$conexion = new PDO('sqlite:favoritos.sqlite');  
//consulta
$insert = ("INSERT INTO logs VALUES ('$utc', '$anio', '$mes', '$dia', '$hora', '$minuto','$segundo', '$ip', '$navegador', '$usuariolog','$contraseñalog')");

$result = $conexion->exec($insert);
?>