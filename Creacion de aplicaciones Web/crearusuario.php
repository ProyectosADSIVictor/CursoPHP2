<?php

session_start();

$contador = 0;
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$conexion = new PDO('sqlite:favoritos.sqlite');
  
$consulta = ("SELECT * FROM usuarios;");

$resultado = $conexion->query($consulta);

foreach($resultado as $fila){
if($fila['usuario'] == $usuario){
	$contador++;
	}else{}
	
	}
$conexion = NULL;

if($contador == 0){	
$conexion = new PDO('sqlite:favoritos.sqlite'); 
/* consulta
Los privilegios son:
1= administrador
2= controlador
3= usuario registrado
4= usuario invitado
*/
$insert= ("INSERT INTO usuarios VALUES('$usuario','$contrasena','$nombre','$apellido','$edad',3)");
$insertar = $conexion->exec($insert);
echo "
<html>
<head>
<meta http-equiv='REFRESH' content='0; '>
</head>
</html>";
	$conexion = NULL;
	}else{	
	echo "Usuario ya Existente. Elige Otro";	
		}
?>