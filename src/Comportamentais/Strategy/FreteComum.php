<?php

namespace DesignPatterns\Comportamentais\Strategy;

class FreteComum implements FreteInterface
{
    public function calcula(float $valor): float
    {
        return $valor * 0.05;
    }
}