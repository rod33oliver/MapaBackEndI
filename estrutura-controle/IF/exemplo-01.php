<?php
//IF
$qualASuaIdade = 75;

$crianca = 12;
$adolescente = 18;
$adulto = 60;
$idoso = 65;

if ($qualASuaIdade < $crianca) {
    echo "Você é uma Criança com $qualASuaIdade anos";
} else if ($qualASuaIdade < $adolescente) {
    echo "Uau! Você está na adolescencia com $qualASuaIdade anos";
} else if ($qualASuaIdade < $adulto) {
    echo "Já é um hominho! Um Adulto de $qualASuaIdade anos";
} else if ($qualASuaIdade < $idoso) {
    echo "é quase um veinho de $qualASuaIdade anos";
} else {
    echo "Estás na melhor idade, com $qualASuaIdade anos";
}
echo "<br>";

//Operador ternário
//echo ($qualASuaIdade < $crianca) ? "Criança" : "Não é criança"; //usada em condições rápidas




?>
