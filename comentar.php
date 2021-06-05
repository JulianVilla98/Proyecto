<?php
$comentario=$_POST['comentario'];


$grabar = fopen("com.html","a");
fwrite ($grabar,"<p> $comentario</p>");
fclose($grabar);

include("index1.php");
?>
