<html>
<head>
	<meta charset="UTF-8">
</head>
</html>
<?php
session_start();
$codigo = $_SESSION['permisos'];
echo "Tu Usuario es: ".$_SESSION['usuario']."";
echo "<br>Tu Clave es: ".$_SESSION['contrasena']."<br><br>";
if($codigo == 1){
	echo "Eres Administrador Bienvenido";
$conexion = new PDO('sqlite:favoritos.sqlite');

$consult= ("select * from usuarios;");

$insert = $conexion->query($consult);
echo '
<table border=1 width=100%>
<tr>
<td>Usuario</td>
<td>Contraseña</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Edad</td>
<td></td>
<td></td>
</tr>';

foreach($insert as $data){


	echo "<tr>
	<td>".$data['usuario']."</td>
	<td>".$data['contrasena']."</td>
	<td>".$data['nombre']."</td>
	<td>".$data['apellido']."</td>
	<td>".$data['edad']."</td>
	<td><a href='eliminarusuario.php?usuario=".$data['usuario']."&contrasena=".$data['contrasena']."&nombre=".$data['nombre']."&apellido=".$data['apellido']."&edad=".$data['edad']."'>Eliminar</a></td>
	
	
	<td><a href='formactualizarusuario.php?usuario=".$data['usuario']."&contrasena=".$data['contrasena']."&nombre=".$data['nombre']."&apellido=".$data['apellido']."&edad=".$data['edad']."'>Actualizar</a></td></tr>";

}
echo "
<tr>
<form action='crearusuario.php' method='POST'>
<td><input type='text' name='usuario'></td>
<td><input type='text' name='contrasena'></td>
<td><input type='text' name='nombre'></td>
<td><input type='text' name='apellido'></td>
<td><input type='text' name='edad'></td>
<td><input type='submit'></td>
<td></td>
</tr>
";

echo "</table>";
}else if($codigo != 1){
	echo "No eres Administrador";
}else{
	$conexion = new PDO('sqlite:favoritos.sqlite');

$consult= ("select * from usuarios;");

$insert = $conexion->query($consult);
echo '
<table border=1 width=100%>
<tr>
<td>Usuario</td>
<td>Contraseña</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Edad</td>
<td></td>
<td></td>
</tr>';

foreach($insert as $data){


	echo "<tr>
	<td>".$data['usuario']."</td>
	<td>".$data['contrasena']."</td>
	<td>".$data['nombre']."</td>
	<td>".$data['apellido']."</td>
	<td>".$data['edad']."</td>
	<td><a href='eliminarusuario.php?usuario=".$data['usuario']."&contrasena=".$data['contrasena']."&nombre=".$data['nombre']."&apellido=".$data['apellido']."&edad=".$data['edad']."'>Eliminar</a></td>
	
	<td><a href='formactualizarusuario.php?usuario=".$data['usuario']."&contrasena=".$data['contrasena']."&nombre=".$data['nombre']."&apellido=".$data['apellido']."&edad=".$data['edad']."'>Actualizar</a></td></tr>";
}
echo "
<tr>
<form action='crearusuario.php' method='POST'>
<td><input type='text' name='usuario'></td>
<td><input type='text' name='contrasena'></td>
<td><input type='text' name='nombre'></td>
<td><input type='text' name='apellido'></td>
<td><input type='text' name='edad'></td>
<td><input type='submit'></td>
<td></td>
</tr>
";

echo "</table>";
	}
$conexion = NULL;
?>