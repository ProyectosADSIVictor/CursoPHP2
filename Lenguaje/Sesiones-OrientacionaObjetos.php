<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<style>
h1{
		text-align: center;
	}
</style>
<h1>Sesiones</h1>
<fieldset>
<?php
session_start();
$primeravariable= "Hola soy una variable de sesion ";
echo "<p>Aca vamos a usar una variable de sesion </p>";
$_SESSION['segundavariable']="Aca estoy cerrando la sesion";
echo $primeravariable;
echo "<a href='destino.php'>Voy al destino </a>";
?>
</fieldset>




<br>
<h1>Clases</h1>
<fieldset>
	<h3>Creacion de objetos</h3>
	<?php

	class dimeAlgo{
	function dimeAlgo($nombre){
		echo "Hola mi nombre es: ".$nombre;
	}
}
$decir = new dimeAlgo("Victor.");

?>
</fieldset>




<br>
<fieldset>
<h3>Metodos que usan atributos</h3>
<?php
class  hablar{
	var $atributo;
	function hablar($saludo){
		$this->atributo=$saludo;
		echo $this->atributo;
	}
}
$decir = new hablar("Soy aprendiz del SENA.");

?>
</fieldset>




<br>
<fieldset>
<h3>Llamado a un metodo</h3>
<?php
class saludar{
	function saludo(){echo "Buenos dias Compañeros.";}
	function adios(){echo "Nos vemos despues!";}
}
$responder = new saludar();
$respo= $responder->adios();
?>
</fieldset>



<br>
<fieldset>
	<h3>Herencia de clases</h3>
	<?php
class saluda{
	function saludo(){echo "Buenos dias Compañeros.";}
	function adios(){echo "Me despido de ustedes!";}
}

class subsaludar extends saluda
{
	var $atributos;
	function hola()
	{
	}
}
$responder = new subsaludar();
$respo= $responder->adios();
?>
</fieldset>
</body>
</html>