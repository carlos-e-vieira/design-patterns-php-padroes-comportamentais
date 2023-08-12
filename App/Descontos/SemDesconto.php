<?php

declare(strict_types=1);

namespace App\Descontos;

use App\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDescontos(Orcamento $orcamento): float
    {
        return 0;
    }
}
