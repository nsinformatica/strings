<?php
$frase = "A repeticao eh a mae da retencao";
$palavra = "mae";
$q = strpos($frase, "$palavra");
var_dump($q);
echo "<br>";
$texto = substr($frase,0,$q);
var_dump($texto);
echo "<br>";
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);
?> 