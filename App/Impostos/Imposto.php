<?php

declare(strict_types=1);

namespace App\Impostos;

use App\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
