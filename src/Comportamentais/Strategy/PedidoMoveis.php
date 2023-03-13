<?php

namespace DesignPatterns\Comportamentais\Strategy;

class PedidoMoveis extends Pedido
{
    private string $nomeSetor;

    public function __construct()
    {
        $this->nomeSetor = 'Móveis';
    }

    public function getNomeSetor(): string
    {
        return $this->nomeSetor;
    }

    public function setNomeSetor($nomeSetor): void
    {
        $this->nomeSetor = $nomeSetor;
    }
}