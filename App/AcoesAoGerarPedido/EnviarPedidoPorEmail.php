<?php

declare(strict_types=1);

namespace App\AcoesAoGerarPedido;

use App\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo '***** Enviando email de pedido gerado *****' . PHP_EOL;
    }
}
