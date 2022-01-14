<?php

$frase = "A repetição é mãe da retenção";

$q = strpos($frase, "mãe");

$texto = substr($frase, $q);
var_dump($texto);



?>