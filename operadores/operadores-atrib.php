<?php
//Aula sobre operadores

// //Operadores sobre strings
// $nome = "Rodrigo"; //string

// echo $nome ." ". 'mais alguma coisa<br>'; //concatenação

// $nome .= " treinamentos"; //esse operador concatena strings, ou seja, junta duas strings em uma só string.

// echo $nome; //Rodrigo treinamentos


//Operadores sobre números



// $valorTotal += 1000; //soma
// $valorTotal -= 1000; //subtração
// $valorTotal *= 1000; //multiplicação
// $valorTotal /= 1000; //divisão
// $valorTotal %= 1000; //módulo
// $valorTotal **= 1000; //exponenciação

// $preco += 10;
// $preco += 10;

// $preco *= .9;

// echo '<br>'. $preco;


//Operadores aritméticos

// $n1 = 17;
// $n2 = 2;

// echo $n1 ** $n2 ."<br>"; //soma
// IMPORTANTE  echo $n1 - $n2 ."<br>"; //subtração
// echo $n1 * $n2 ."<br>"; //multiplicação
// echo $n1 / $n2 ."<br>"; //divisão
// echo $n1 % $n2 ."<br>"; //módulo
// echo $n1 ** $n2 ."<br>"; //exponenciação


//Operadores de comparação

// $a = 10;
// $b = 10;

// var_dump($a > $b); //maior que
// var_dump($a < $b); //menor que
// var_dump($a == $b); //igual
// var_dump($a === $b); //igual e do mesmo tipo
// var_dump($a != $b); //diferente
// var_dump($a !== $b); //diferente e do mesmo tipo
// var_dump($a >= $b); //maior ou igual
// var_dump($a <= $b); //menor ou igual

//Operadores lógicos

// $a = 10;
// $b = 10;

// var_dump($a > $b && $a > $b); //and
// var_dump($a > $b || $a > $b); //or
// var_dump(!($a > $b)); //not


//Operadores de atribuição

// $a = 10;
// $b = 10;

// $a += $b; //$a = $a + $b;
// $a -= $b; //$a = $a - $b;
// $a *= $b; //$a = $a * $b;
// $a /= $b; //$a = $a / $b;
// $a %= $b; //$a = $a % $b;
// $a **= $b; //$a = $a ** $b;

// //Operadores de incremento e decremento

// $a = 10;

// $a++; //$a = $a + 1;
// $a--; //$a = $a - 1;

//Operadores do PHP 7

// $a = NULL;
// $b = NULL;
// $c = 10;

// $a ??= $b; //se $a for nulo, atribui $b
// $a ??= $b ?? $c; //se $a for nulo, atribui $b, se $b for nulo, atribui $c
// $a ??= $b ?? $c ?? $d; //se $a for nulo, atribui $b, se $b for nulo, atribui $c, se $c for nulo, atribui $d

//Operador spaceship

// $a = 10;
// $b = 20;

// TODO pegar melhor esse conceito var_dump($a <=> $b); //se $a for menor que $b, retorna -1, se $a for maior que $b, retorna 1, se $a e $b forem iguais, retorna 0







?>