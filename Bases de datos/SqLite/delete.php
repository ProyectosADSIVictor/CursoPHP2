<?php

$conexion = new PDO('sqlite:biblioteca.sqlite');  

$count = $conexion->exec("DELETE FROM discos WHERE artista='Yelsid'  and anio= 2011");

?>