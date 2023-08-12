<?php

declare(strict_types=1);

namespace App\Descontos;

use App\Orcamento;

abstract class Desconto
{
    protected $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDescontos(Orcamento $orcamento): float;
}
