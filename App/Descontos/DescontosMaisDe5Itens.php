<?php

declare(strict_types=1);

namespace App\Descontos;

use App\Orcamento;

class DescontosMaisDe5Itens extends Desconto
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDescontos($orcamento);
    }
}
