<?php 

$v1  = 2;
$v2 = 10;

function somaValores($v1, $v2) {
    return $v1 + $v2;
}
echo somaValores($v1, $v2) . '<br>';

function aoQuadrado($valor) {
    return $valor * $valor;
}
echo aoQuadrado($v1);