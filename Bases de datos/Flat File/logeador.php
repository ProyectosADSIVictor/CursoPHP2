<?php
$archivologs= "log.dat";
@$ip = getenv(REMOTEADDR);
$navegador= $_SERVER["HTTP_USER_AGENT"];
$contenido = date('U')."|". date("Y"."|"."m"."|"."d"."|"."H"."|"."i"."|"."s")."|".$navegador."|".$ip."\n";
$manejador= fopen($archivologs, 'a+');
fwrite($manejador, $contenido);
?>