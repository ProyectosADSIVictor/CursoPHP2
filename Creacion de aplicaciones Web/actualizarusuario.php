<html>
<head>
	<meta charset="UTF-8">
</head>
</html>
<?php
session_start();
$conexion = new PDO('sqlite:favoritos.sqlite');
//$usuario = $_SESSION['usuario'];
//$contrasena = $_SESSION['contrasena'];
$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$usuarioantiguo = $_SESSION['usuario'];
$consulta = "UPDATE usuarios SET usuario='".$usuario."', contrasena='".$contrasena."', nombre='".$nombre."', apellido='".$apellido."', edad='".$edad."' WHERE usuario ='".$usuarioantiguo."'";
$update = $conexion->query($consulta);
echo "
<html>
<head>
<meta http-equiv='REFRESH' content='0; url=gestionusuarios.php'>
</head>
</html>";
$conexion = NULL;
?>