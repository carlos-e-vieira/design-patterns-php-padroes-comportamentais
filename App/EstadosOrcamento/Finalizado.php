<?php

declare(strict_types=1);

namespace App\EstadosOrcamento;

use App\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
         throw new DomainException('Um orçamento finalizado não pode receber desconto');
    }
}
