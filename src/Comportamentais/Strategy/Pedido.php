<?php

namespace DesignPatterns\Comportamentais\Strategy;

abstract class Pedido
{
    private float $valor;
    private FreteInterface $tipoFrete;
    
    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor($valor): void
    {
        $this->valor = $valor;
    }

    public function setTipoFrete(FreteInterface $frete)
    {
        $this->tipoFrete = $frete; 
    }

    public function calculaFrete(): float
    {
        return $this->tipoFrete->calcula($this->getValor());
    }
}
