<?php

declare(strict_types=1);

namespace App\EstadosOrcamento;

use App\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
   public function calculaDescontoExtra(Orcamento $orcamento): float
   {
        return $orcamento->valor * 0.05;
   }

   public function aprova(Orcamento $orcamento): void
   {
        $orcamento->estadoAtual = new Aprovado();
   }

   public function reprova(Orcamento $orcamento): void
   {
        $orcamento->estadoAtual = new Reprovado();
   }
}
