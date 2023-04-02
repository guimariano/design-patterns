<?php

namespace DesignPatterns\Comportamentais\TemplateMethod;

abstract class Pagamento
{
    protected float $valor;
    protected Gateway $gateway;

    public function __construct($valor, Gateway $gateway)
    {
        $this->valor = $valor;
        $this->gateway = $gateway;
    }

    abstract public function calcularDesconto(): float;
   
    /** Este é o template method! é um method que usa outros que a nivel de
     * execução terão seu comportamento alterado ou sobrescrito */
    public function realizaCobranca(): bool
    {
        $valorFinal = $this->valor + $this->calcularTaxa() - $this->calcularDesconto();
        return $this->gateway->cobrar($valorFinal);
    }

    /** Método padrão, mas que pode ser sobrescrito dependendo da subclasse. */
    public function calcularTaxa(): float
    {
        return 0.00;
    }
}