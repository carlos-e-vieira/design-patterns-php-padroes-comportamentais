<?php

declare(strict_types=1);

namespace App\EstadosOrcamento;

use App\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
    /** @throws \DomainException */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser aprovado');
    }

    public function reprova(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser reprovado');
    }

    public function finaliza(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser finalizado');
    }
}
