<?php

declare(strict_types=1);

namespace App\AcoesAoGerarPedido;

use App\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo '***** Gerando log de geralção de pedido *****' . PHP_EOL;
    }
}
