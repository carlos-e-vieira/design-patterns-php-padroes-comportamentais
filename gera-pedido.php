<?php

use App\AcoesAoGerarPedido\CriarPedidoNoBanco;
use App\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use App\AcoesAoGerarPedido\LogGerarPedido;
use App\GerarPedido;
use App\GerarPedidoHandler;

require 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);