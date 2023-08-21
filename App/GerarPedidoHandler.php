<?php

declare(strict_types=1);

namespace App;

use App\AcoesAoGerarPedido\AcaoAposGerarPedido;
use DateTimeImmutable;

class GerarPedidoHandler
{    
    /** @var AcaoAposGerarPedido[] */
    private array $acoesAposGerarPedido = [];

    public function __construct(/* PedidoRepository, MailService */) 
    {
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
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

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
