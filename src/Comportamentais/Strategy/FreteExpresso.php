<?php

namespace DesignPatterns\Comportamentais\Strategy;

class FreteExpresso implements FreteInterface
{
    public function calcula(float $valor): float
    {
        return $valor * 0.1;
    }
}