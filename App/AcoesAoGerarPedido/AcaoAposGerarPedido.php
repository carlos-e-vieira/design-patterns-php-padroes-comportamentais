<?php

declare(strict_types=1);

namespace App\AcoesAoGerarPedido;

use App\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
