<?php

declare(strict_types=1);

namespace App\Descontos;

use App\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDescontos($orcamento);
    }
}
