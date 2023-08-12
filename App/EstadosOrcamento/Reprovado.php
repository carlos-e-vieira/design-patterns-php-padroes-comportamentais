<?php

declare(strict_types=1);

namespace App\EstadosOrcamento;

use App\Orcamento;
use DomainException;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
         throw new DomainException('Um orçamento reprovado não pode receber desconto');
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
