<?php

declare(strict_types=1);

namespace App;

class GerarPedido
{
    private $valorOrcamento;
    private $numeroItens;
    private $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroItens,
        string $nomeCliente
    ) {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getValorOrcamento() {
        return $this->valorOrcamento;
    }

    public function getNumeroItens() {
        return $this->numeroItens;
    }

    public function getNomeCliente() {
        return $this->nomeCliente;
    }
}
