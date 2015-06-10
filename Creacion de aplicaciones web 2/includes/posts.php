<!--Esta es una plantilla de articulo -->
<?php

$conexion = new PDO('sqlite:database/blogs.sqlite');

$select = "SELECT * FROM posts WHERE usuario = '".$_SESSION['usuariotemporal']."';";
$ejecutar = $conexion -> query($select);
foreach ($ejecutar as $fila ){
echo '<article>
<div>

<time>'.$fila['anio'].'-'.$fila['mes'].'-'.$fila['dia'].'</time>
<h3>'.$fila['titulo'].'</h3>
<h4>'.$fila['subtitulo'].'</h4>
<p>'.$fila['texto'].'</p>
</div>
</article>';		
}
?> 

<article>
<div>
<time>2011-01-31</time>
<h3>De Nuevo en Austria!</h3>
<h4>Grabacion de Nuevos Cursos con <span>Video2Brain</span></h4>
<p>Durante los proximos 15 dias estare en Graz grabando dos cursos para Video2Brain: HTML5 Y CSS3 Y Creacion DE Aplicaciones Web 2.0 </p>
</div>
</article>