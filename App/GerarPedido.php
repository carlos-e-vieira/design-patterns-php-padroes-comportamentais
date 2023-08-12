<?php

declare(strict_types=1);

namespace App;

use DateTimeImmutable;

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

    public function execute()
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo 'Cria pedido no banco de dados' . PHP_EOL;
        echo 'Envia email para cliente' . PHP_EOL;
    }
}
