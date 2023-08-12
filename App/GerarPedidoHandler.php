<?php

declare(strict_types=1);

namespace App;

use App\AcoesAoGerarPedido\CriarPedidoNoBanco;
use App\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use App\AcoesAoGerarPedido\LogGerarPedido;
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

        $pedidosRepository = new CriarPedidoNoBanco();
        $logGerarPedido = new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();

        $pedidosRepository->executaAcao($pedido);
        $logGerarPedido->executaAcao($pedido);
        $enviarPedidoPorEmail->executaAcao($pedido);
    }
}
