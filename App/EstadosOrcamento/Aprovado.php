<?php

declare(strict_types=1);

namespace App\EstadosOrcamento;

use App\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
         return $orcamento->valor * 0.02;
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
