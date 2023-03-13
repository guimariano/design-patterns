<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Comportamentais\Strategy\FreteComum;
use DesignPatterns\Comportamentais\Strategy\FreteExpresso;
use DesignPatterns\Comportamentais\Strategy\PedidoEletronicos;

echo '<pre>';
print_r('O padrão de projeto Strategy cria uma família de algoritmos que podem ser intercambiados, ou seja, utilizar um algoritmo no lugar de outro, conforme a necessidade de quem os utiliza.
Exemplo da Aula: Cálculo de diferentes tipos de frete disponíveis para pedidos feitos em setores distintos de um e-commerce.');
echo '</pre>';

$pedido = new PedidoEletronicos();
$pedido->setValor(100);

$freteComum = new FreteComum();
$freteExpresso = new FreteExpresso();

$pedido->setTipoFrete($freteExpresso);

echo '<pre>'; print_r('Frete Expresso: R$' . $pedido->calculaFrete()); echo '</pre>';

$pedido->setTipoFrete($freteComum);

echo '<pre>'; print_r('Frete Comum: R$' . $pedido->calculaFrete()); echo '</pre>';

