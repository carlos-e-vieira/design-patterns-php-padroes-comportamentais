<?php

declare(strict_types=1);

namespace App;

use DateTimeImmutable;

class GerarPedidoHandler
{    
    public function __construct(/* PedidoRepository, MailService */) 
    {
    }

    public function execute(GerarPedido $gerarPedido): void
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidosRepository
        echo '***** Cria pedido no banco de dados *****' . PHP_EOL;

        // MailService
        echo '***** Envia email para cliente *****' . PHP_EOL;

        // Log
        echo '***** Gerar log de criação de pedido *****' . PHP_EOL;
    }
}
