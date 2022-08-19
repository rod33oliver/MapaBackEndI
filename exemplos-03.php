
<?php
//http://localhost/exemplos-03.php
//Tipos de Dados

$nome = "João";
$site = 'www.google.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
///////////////////////////////

$frutas = array("abacaxi", "laranja", "manga");
/// array associativo 0,1,2. É um tipo composto

// echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);
// object(DateTime)#1 (3) { ["date"]=> string(26) "2022-08-16 21:39:00.499640" ["timezone_type"]=> int(3) ["timezone"]=> string(17) "America/Sao_Paulo" }
// CTRL + U para quebrar linha no navegador

// manipulação de arquivos
$arquivo = fopen("exemplos-03.php", "r");
//var_dump($arquivo);

$nulo = NULL;
$vazio = "";

?>