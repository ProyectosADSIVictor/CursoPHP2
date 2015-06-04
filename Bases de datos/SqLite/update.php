<?php

$conexion = new PDO('sqlite:biblioteca.sqlite');  

$count = $conexion->exec("UPDATE discos SET artista='Maluma' WHERE artista ='Maaluumaa'and anio=2014");

?>