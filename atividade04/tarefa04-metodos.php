<?php
class Produto {
    public $descricao;
    public $estoque;
    public $preco;

    public function aumentarEstoque($valor) {
        $this->estoque = $this->estoque + $valor;
    }
    public function diminuirEstoque($valor) {
        $this->estoque = $this->estoque - $valor;
    }
    public function reajustarPreco($porcentagem) {
        $porcentagem = $porcentagem / 100;
        $novoValor = $this->preco + ($this->preco * $porcentagem);
        $this->preco = $novoValor;
    }
}

$produto1 = new Produto;
$produto1-> descricao = "Caneta Bic Azul";
$produto1-> estoque = 150;
$produto1-> preco = 2.5;

echo 'O estoque de ' . $produto1->descricao . ' é '. $produto1->estoque . '<br>';
echo 'O preço de ' . $produto1->descricao . ' é '. $produto1->preco . '<br>';
$produto1->aumentarEstoque(10);
$produto1->diminuirEstoque(5);
$produto1->reajustarPreco(50);
echo 'O estoque de ' . $produto1->descricao . ' é '. $produto1->estoque . '<br>';
echo 'O preço de ' . $produto1->descricao . ' é '. $produto1->preco . '<br>';








