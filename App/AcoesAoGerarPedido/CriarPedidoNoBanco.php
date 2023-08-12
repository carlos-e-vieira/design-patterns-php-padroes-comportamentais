<?php

declare(strict_types=1);

namespace App\AcoesAoGerarPedido;

use App\Pedido;

class CriarPedidoNoBanco
{
    public function executaAcao(Pedido $pedido): void
    {
        echo '***** Salvando pedido no banco de dados *****' . PHP_EOL;
    }
}
