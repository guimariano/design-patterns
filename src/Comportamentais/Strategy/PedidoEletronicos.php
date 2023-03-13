<?php

namespace DesignPatterns\Comportamentais\Strategy;

class PedidoEletronicos extends Pedido
{
    private string $nomeSetor;

    public function __construct()
    {
        $this->nomeSetor = 'Eletrônicos';
    }

    public function getNomeSetor(): string
    {
        return $this->nomeSetor;
    }

    public function setNomeSetor(string $nomeSetor): void
    {
        $this->nomeSetor = $nomeSetor;
    }
}
