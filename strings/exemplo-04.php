<?php
/// Estas funções são as top 10 das funções de string
$frase = "A repetição é a mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, "mãe"); // Essa função busca o índice de onde está essa palavra, só que neste caso ele conta o número de casas 

$texto = substr($frase, 0, $q);

var_dump($texto); 

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($q);  

?>