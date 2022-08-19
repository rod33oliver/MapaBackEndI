<?php
//Nesta aula foi ensinado sobre o escopo de uma variável, ou seja, o que ela pode ou não acessar. Também foi ensinado sobre o uso de variáveis super globais.
//Path: exemplo-06.php
// Exemplo de variável super global:
// <?php
// $ip = $_SERVER["REMOTE_ADDR"]; //pega o ip do usuário
// Variáveis super globais são variáveis que podem ser acessadas de qualquer lugar do código.
// Variáveis dentro e fora de uma função.


$nome = 'Rodrigo';

function teste() {
    global $nome;
    echo $nome;
}
   
function teste2() {
    $nome = 'João';
    echo $nome ." ". '<br>';
}

teste();
teste2();
?>/