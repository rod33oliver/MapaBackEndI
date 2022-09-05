<?php 

class Cliente 
{
  public $codigoCliente;
  public $nomeCliente;
  public $endereco;
  public $telefone;
  public $email;  
}

class Produto
{
  public $codigoProduto;
  public $descricao;
  public $valorCusto;
  public $valorVenda;
  public $quantidade;
}

include (Cliente);
$objetoCliente->codigoCliente = 001;
$objetoCliente->nomeCliente = "Rodrigo";
$objetoCliente->endereco = "Rua Amarela, SN, Florianopolis, SC";
$objetoCliente->telefone = "3241-0341";
$objetoCliente->email = "rodrigo.amarelo@gmail.com";

include (Produto);
$objetoProduto->codigoProduto = 0001;
$objetoProduto->descricao = "Disjuntor Unipolar Din Curva C 20A Steck"
$objetoProduto->valorCusto = 1.25;
$objetoProduto->valorVenda = 6.50;
$objetoProduto->quantidade = 15;

echo $objetoProduto->valorCusto;
?>