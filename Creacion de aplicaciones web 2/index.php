<?php 

session_start();

include "includes/variablesusuario.php";
?>

<h1><span><?php// $_SESSION['nombre']." ".$_SESSION['apellidouno'];?></span></h1>
<?php
//$variable = $_SESSION['nombre'];
//echo $variable;
?>
<h6><?php //echo $_SESSION['descipcion'];?><span> <a href= "<?php //echo $_SESSION['webpersonal']; ?>"</span></h6>
<?php 
include ("includes/crearpost.php");

include ("includes/posts.php");

?>

