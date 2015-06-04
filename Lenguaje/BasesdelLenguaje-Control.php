<html>
	<head>
	<h1>Bases de lenguaje</h1>
	</head>
	<fieldset>
	<body bgcolor="cyan">
	<style>
	h1{
		text-align: center;
	}

</style>
		<h2>Aca empieza el curso de PHP</h2>
		<?php
		//Esto es un comentario en una sola lina.
		/*Este es un comentario en 
		varias lineas
		*/
		echo "Hola soy un parrafo";
		echo "<br>";
		echo "La suma de 3+3 es: ";
		echo 3+3;

		?>
	</fieldset>




<br>
<h1>Variables</h1>

<fieldset>
<h3>Variables</h3>
	<?php
$miVariable="Hola soy una variable <br>";
echo $miVariable;

$miValor="36 ";
echo "La multiplicacion de 3 y 36 es: ". 3*$miValor;
?>
</fieldset>



<br>
<fieldset>
<h3>Formularios</h3>
	<form action="Capitulo2.php" method="POST">
		Ingrese su Nombre:
		<input type="text" name="nombre" required="required" onKeypress="if (event.keyCode > 45 && event.keyCode < 57) event.returnValue = false;"><br><br>
		Ingrese su Apellido:
		<input type="text" name="apellido" required="required" onKeypress="if (event.keyCode > 45 && event.keyCode < 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
			
		</form>
		<?php
		if (isset($_POST['nombre'])&&($_POST['apellido'])){ 
		
echo "Tu nombre es: ".$_POST['nombre']."<br><br>";
echo "Tu apellido es: ".$_POST['apellido'];

}
?>	
</fieldset>




<br>
<fieldset>
<h3>Numeros</h3>
	<?php
	$entero=5;
	echo "Soy un numero entero y soy el numero ".$entero;
	$decimal= 5.4778;
	echo "<br> Soy un numero decimal y eso el numero ".$decimal;
	$cientifica= 3e4;

	echo "<br> Soy un numero en notacion cientifica de de 3 e 4 ".$cientifica;
	?>
</fieldset>




<br>
<fieldset>
<h3>Booleanos</h3>
	<?php
	$booleana=true;
	$boolean= false;
	echo "El valor de la variable booleana cuando su valor es true es: ".$booleana. "<br>";
	echo "El valor de la variable boolean cuando es valor es false es: ".$boolean;
	?>
</fieldset>




<br>
<fieldset>
<h3>Otros</h3>
	<p>Datos de la Computadora</p>
	<?php
	@$tuip= getenv(REMOTE_ADDR);
	echo "La IP de esta maquina es: ".($tuip)."<br>";

	$navegador=$_SERVER["HTTP_USER_AGENT"];
	echo "Y el sistema operativo y el navegador es: ".$navegador;
	?>
</fieldset>




<br>
<h1>Cadenas</h1>
<fieldset>
	<?php
	echo 'Soy una cadena con comillas "dobles"<br>';
	echo "Soy otra cadena con comillas \"dobles\"<br>";
	echo "Soy una cadena con comillas 'sencillas'";

?>
</fieldset>




	<br>
	<h1>Operadores</h1>
	<fieldset>
	<h3>Aritmeticos</h3>
	<?php
	echo "La suma de 4+6 es: ";
	echo 4+6;
	echo "<br>";
	echo  "La resta de 15-9 es: ";
	echo 15-9;
	echo "<br>";
	echo  "La multiplicacion de 9*8 es: ";
	echo 9*8;
	echo "<br>";
	echo  "La division de 30 entre 5 es: ";
	echo 30/5;
	echo "<br>";
	echo "El resto de la division de 90 entre 7 es: ";
	echo 90%7;

	?>	
	</fieldset>




	<br>
	<fieldset>
		<h3>Post-Incremento Post-Decremento</h3>
	<?php
	echo "<p>Incremento</p>";
	$incremento=2;
	echo $incremento++;echo"<br>";
	echo $incremento++;echo"<br>";
	echo $incremento++;echo"<br>";
	echo $incremento++;echo"<br><br>";
	echo "<p>Decremento</p>";
	$decremento=7;
	echo $decremento--;echo "<br>";
	echo $decremento--;echo"<br>";
	echo $decremento--;echo"<br>";
	echo $decremento--;echo"<br>";

	?>
	</fieldset>





	<br>
	<fieldset>
	<h3>Cadena</h3>
		<?php
		$var1="Hola ";
		$var2="Mi nombre es ";
		$var3="Victor Gutierrez";
		echo $var1.$var2.$var3;
		?>
	</fieldset>




	<br>
	<fieldset>
		<h3>Asignacion</h3>
		<?php
		$miVariable=7;
		echo "El numero es: ".$miVariable;
		echo "<br>";

		$miVariable+=5;
		echo "7 + 5 es: ".$miVariable;
		echo "<br>";

		$miVariable-=5;
		echo "12 - 5 es: ".$miVariable;
		echo "<br>";

		$miVariable*=5;
		echo "7 * 5 es: ".$miVariable;
		echo "<br>";

		$miVariable/=5;
		echo "35 / 5 es: ".$miVariable;
		echo "<br>";
		?>
	</fieldset>




	<br>
	<fieldset>
		<h3>Comparacion</h3>
		<form action="Capitulo2.php" method="POST">
		Ingrese Numero1:
		<input type="text" name="num1" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		Ingrese Numero2:
		<input type="text" name="num2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
			
		</form>
		<?php
		if (isset($_POST['num1'])&&($_POST['num2'])){ 
		$nume1=$_POST['num1'];
		$nume2=$_POST['num2'];

		if($nume1>$nume2){
		echo $nume1." es mayor que ".$nume2;
		}else if($nume1==$nume2){
		echo $nume1." es igual a ".$nume2;
		}else{
		echo $nume1." es menor que ".$nume2;
		}
	}
		?>
	</fieldset>




	<br>
	<fieldset>
		<h3>Logicos</h3>
		<form action="Capitulo2.php" method="POST">
		Ingrese Numero1:
		<input type="text" name="numero1" maxlength="2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		Ingrese Numero2:
		<input type="text" name="numero2" maxlength="2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
		</form>
		<?php
		if (isset($_POST['numero1'])&&($_POST['numero2'])){ 
		$uno=$_POST['numero1'];
		$dos=$_POST['numero2'];
		if($uno==1 && $dos==2 ){
			echo "adivinaste los dos numeros ";
		}else if($uno==1 || $dos==1){
			echo "Adivinaste solo un numero";
		}else 
		echo "Los numeros son diferentes";
	}
		?>
	</fieldset>




	<h1>Control</h1>
	<br>
	<fieldset>
		<h3>if</h3>
		<form action="Capitulo2.php" method="POST">
		Ingrese Numero1:
		<input type="text" name="numer1" maxlength="2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		Ingrese Numero2:
		<input type="text" name="numer2" maxlength="2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
			
		</form>
		<?php
		if (isset($_POST['numer1'])&&($_POST['numer2'])){ 
		$uno=$_POST['numer1'];
		$dos=$_POST['numer2'];
		if($uno==$dos ){
			echo "Los numeros son iguales ";
		}else 
		echo "Los numeros son diferentes";
	}
		?>
	</fieldset>
	



	<br>
	<fieldset>
		<h3>for</h3>
		<?php
		for ($i=0; $i <5 ; $i++) { 
			echo "Este es el numero ".$i."<br>";
		}
		?>
	</fieldset>




	<br>
	<fieldset>
		<h3>Switch</h3>
		<form action="Capitulo2.php" method="POST">
		Ingrese Numero de 1 a 3:
		<input type="text" name="numer" maxlength="2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
			
		</form>
		<?php
	if (isset($_POST['numer'])){ 
		$numero=$_POST['numer'];
		switch ($numero) {
			case (1):
				echo "El Numero es igual a uno";
				break;
			case(2):
				echo "El Numero es igual a dos";
				break;
			case(3):
				echo "El Numero es igual a tres";
			break;
			default:
			echo "Numero Fuera de Rango";
			break;
			}
		}	
	?>
	</fieldset>




	<br>
	<fieldset>
		<h3>While</h3>
		<form action="Capitulo2.php" method="POST">
		Ingrese un Numero:
		<input type="text" name="numer" maxlength="2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
			
		</form>
		<?php
	if (isset($_POST['numer'])){ 
		$variable=0;
		$numero=$_POST['numer'];
		while ( $variable<= $numero) {
			$variable++;
			echo $variable."<br>";
		}
	}
		?>
	</fieldset>





	<br>
	<fieldset>
		<h3>Do While</h3>
		<?php
		$variable=1;
		do{
			echo "Hola ";
		}while ( $variable > 2) ;
			echo "Ciclo Terminado";
		?>
	</fieldset>
	<br>
	<fieldset>
		<h3>Goto</h3>
		<?php
		Goto texto;
		echo "Este texto no lo quiero mostrar";
		texto:
		echo "Este texto es para mostrar";
		?>
	</fieldset>




	<br>
	<fieldset>
		<h3>Foreach</h3>
		<?php
		$matriz = array
		("Frutas","Verduras","Carnes","Lacteos","Granos");
		foreach ($matriz as $valor) {
			echo $valor."<br/>";
		}
	?>
	</fieldset>
</body>
</html>