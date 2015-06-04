<!DOCTYPE html>
<html>
<meta charset="UTF-8">;
<head>
</head>
<body>
<style>
	h1{
		text-align: center;
	}

</style>
<h1>Funciones</h1>
<fieldset>
<h3>Creacion de funcion</h3>
	<?php
function funcion(){
	echo "Yo soy Victor <br>";
	echo "Soy de ADSI <br>";
	echo ("Estudio en segundo piso");
}
funcion();
	?>
</fieldset>




<br>
<fieldset>

<h3>Funcion con parametros</h3>
	<?php
	//tabla de multiplicar de un numero
function tabla($numero){
	for ($i=0; $i <10 ; $i++) { 
		echo $numero. " * ".$i." = ".$numero*$i."<br>";
	}
}
//tabla de multiplicar.
for ($x=0; $x < 10; $x++) { 
	echo "<b>Tabla del ".$x."</b><br>";
	tabla ($x);
}
?>
</fieldset>



<br>
<fieldset>

<h3>Ambito</h3>
	<?php
	$saludo="Hola yo soy Victor";
	function saludo(){
		global $saludo;
		echo $saludo;
	}
	saludo();
?>
</fieldset>



<br>
<h1>Include</h1>
<fieldset>

<h3>Ambito</h3>
	<?php
	include "incluido.php";
	echo "<em>Texto original <br></em>";
	echo "<p>En un principio los ordenadores no disponían de pantalla o monitor. Los resultados de los cálculos aparecían impresos en papel; hoy las posibilidades son muy variadas: monitores, impresoras, altavoces, línea telefónica...<p>";	
?>
</fieldset>



<br>
<h1 style="align:">Matrices</h1>
<fieldset>
<h3>Unidemensionales</h3>
	<?php
	$Alumnos[0]="Jorge";
	$Alumnos[1]="Luis";
	$Alumnos[2]="Andrea";
	$Alumnos[3]="Diego";
	for ($i=0; $i < 4; $i++) { 
		echo $Alumnos[$i]."<br>";
	}
	?>
</fieldset>



<br>
<fieldset>
<h3>Multidimensionales</h3>
<em>Esta es mi agenda</em><br><br>
	<?php
	$agenda[0]['Nombre']="Jorge";
	$agenda[0]['Telefono']="3124465606";
	
	$agenda[1]['Nombre']="Marlen";
	$agenda[1]['Telefono']="3124567289";

	$agenda[2]['Nombre']="Katerine";
	$agenda[2]['Telefono']="3001274593";
	
	echo $agenda[2]['Nombre'];
	echo " ";
	echo $agenda[2]['Telefono'];
	echo "<br>";
	echo $agenda[1]['Nombre'];
	echo " ";
	echo $agenda[1]['Telefono'];
	?>
</fieldset>



<br>
<fieldset>
<h3>Multidimensionales</h3>
<em>Esta es mi agenda</em><br><br>
	<?php
	$agenda[0]['Nombre']="Jorge";
	$agenda[0]['Telefono']="3124465606";
	
	$agenda[1]['Nombre']="Marlen";
	$agenda[1]['Telefono']="3124567289";

	$agenda[2]['Nombre']="Katerine";
	$agenda[2]['Telefono']="3001274593";
	
	$agenda[3]['Nombre']="Orlando";
	$agenda[3]['Telefono']="3156782300";

	$agenda[4]['Nombre']="Maira";
	$agenda[4]['Telefono']="3206535710";

	$agenda[5]['Nombre']="Carlos";
	$agenda[5]['Telefono']="3115489789";


	for ($i=0; $i <5 ; $i++) {
	echo '
	<table border=1 width=300px>
	<tr>
	<td>
	Nombre:
	</td>
	<td>'.$agenda[$i]['Nombre'].'</td>
	</tr>
	<tr>
	<td>
	Telefono:
	</td>
	<td>'.$agenda[$i]['Telefono'].'</td>
	</tr>
	</table>
	<br>
	' ;
		
	}
	?>
</fieldset>



<br>
<h1>Fechas</h1>
<fieldset>
<h3>Parametros de Fecha</h3>
	<?php
	echo 'Dia actual en numero asi date("d"); : ';
	echo date("d")."<br>";

	echo 'Dia actual en numero asi date("j"); : ';
	echo date("j")."<br>";

	echo 'Nombre del dia actual primeras tres letras asi date("D"); : ';
	echo date("D")."<br>";

	echo 'Nombre completo del dia actual asi date("l"); : ';
	echo date("l")."<br>";

	echo 'Dia de la semana actual en numero asi date("N") o asi date("w"); : ';
	echo date("N")."<br>";

	echo 'Dia actual del año actual asi date("z"); : ';
	echo date("z")."<br>";

	echo 'Numero de semana del año actual asi date("W"); : ';
	echo date("W")."<br>";

	echo 'Mes del año en el que estamos asi date("F"); : ';
	echo date("F")."<br>";

	echo 'Mes del año actual en numeros asi date("m"); : ';
	echo date("m")."<br>";

	echo 'Mes del año actual primeras tres letras asi date("M"); : ';
	echo date("M")."<br>";

	echo 'Mes del año actual sin cero asi date("n"); : ';
	echo date("n")."<br>";

	echo 'Dias del mes actual asi date("t"); : ';
	echo date("t")."<br>";

	echo 'Año actual asi date("Y"); : ';
	echo date("Y")."<br>";

	echo 'Año Bisiesto muestra 1 sino muestra 0 asi date("L"); : ';
	echo date("L")."<br>";

	echo 'Fecha en formato ISO asi date("c"); : ';
	echo date("c")."<br>";

	echo 'Fecha de inicio de la epoca junix desde 1 enero de 1970 asi date("U"); : ';
	echo date("U")." segundos <br>"; 
	?>
</fieldset>



<br>
<fieldset>
<h3>Parametros de Tiempo</h3>
	<?php
	echo 'Indica si el tiempo actual si es pm a am asi date("a"); : ';
	echo date("a")." <br>"; 

	echo 'Indica si el tiempo actual si es pm a am asi date("A"); : ';
	echo date("A")." <br>"; 

	echo 'Obtener la hora del dia en un formato de 1 a 12 horas asi date("g"); : ';
	echo date("g")." <br>"; 

	echo 'Obtener la hora del dia en un formato de 1 a 24 horas asi date("G"); : ';
	echo date("G")." <br>"; 

	echo 'Obtener los minutos de la hora actual asi date("i"); : ';
	echo date("i")." <br>"; 

	echo 'Obtener los segundos de la hora actual asi date("s"); : ';
	echo date("s")." <br>"; 

	echo 'Obtener zona horaria de la hora actual asi date("e"); : ';
	echo date("e")." <br>";


	?>
</fieldset>



<br>
<fieldset>
	<h3>Formulacion de una fecha</h3>
	<?php
	echo "Hoy es ".date("l")." , ".date("j")." de ".date("F")." del ".date("Y");
	?>
</fieldset>




<br>
<fieldset>
	<h3>Fechas en castellano</h3>
	<?php
	function dametiempo(){
	switch (date("l")) {
		case "Monday":
			$dia="Lunes";
			break;

		case "Tuesday":
			$dia="Martes";
			break;

		case "Wednesday":
			$dia="Miercoles";
			break;

		case "Thursday":
			$dia="Jueves";
			break;

		case "Friday":
			$dia="Viernes";
			break;

		case "Saturday":
			$dia="Sabado";
			break;

		case "Sunday":
			$dia="Domingo";
			break;
	}

	switch (date("F")) {
		case 'January':
			$mes="Enero";
			break;

		case 'February':
			$mes="Febrero";
			break;

		case 'March':
			$mes="Marzo";
			break;

		case 'April':
			$mes="Abril";
			break;

		case 'May':
			$mes="Mayo";
			break;

		case 'June':
			$mes="Junio";
			break;

		case 'July':
			$mes="Julio";
			break;

		case 'August':
			$mes="Agosto";
			break;

		case 'September':
			$mes="Septiembre";
			break;

		case 'October':
			$mes="Octubre";
			break;

		case 'November':
			$mes="Noviembre";
			break;

		case 'December':
			$mes="Diciembre";
			break;
		
	}
	echo "Hoy es ".$dia." , ".date("j")." de ".$mes." del ".date("Y");
}
dametiempo();
?>
</fieldset>
</body>
</html>