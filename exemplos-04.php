<?php
//http://localhost/exemplos-04.php?a=rodrigo
$nome = $_GET["a"]; //Get é uma variável super global que recebe dados do usuário
//existem várias super globais

$ip = $_SERVER["REMOTE_ADDR"]; //pega o ip do usuário

// echo $ip;

$ip2 = $_SERVER["SCRIPT_NAME"]; //pega o nome do arquivo

// echo $ip2;

$ip3 = $_SESSION["nome"]; //pega o nome da sessão

echo $ip3;
//var_dump($nome);

?>