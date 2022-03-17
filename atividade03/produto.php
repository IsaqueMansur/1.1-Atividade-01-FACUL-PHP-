<?php 

class Produto {
    public $descricao;
    public $estoque;
    public $preco;
}

$produto1 = new Produto;
$produto1-> descricao = "Caneta Bic Azul";
$produto1-> estoque = 150;
$produto1-> preco = 2.5;

echo 'o ' . $produto1->descricao . ' tem ' . $produto1->estoque. ' em estoque com o preço unitário de R$'. $produto1->preco;