<?php

declare(strict_types=1);

namespace App;

use App\Descontos\Desconto;
use App\Descontos\DescontoMaisDe500Reais;
use App\Descontos\DescontosMaisDe5Itens;
use App\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontosMaisDe5Itens(
                new DescontoMaisDe500Reais(
                    new SemDesconto()
                )
            );

        return $cadeiaDeDescontos->calculaDescontos($orcamento);
    }
}
