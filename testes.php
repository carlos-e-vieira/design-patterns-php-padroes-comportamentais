<?php

use App\CalculadoraDeDescontos;
use App\CalculadoraDeImpostos;
use App\Impostos\Icms;
use App\Impostos\Iss;
use App\Orcamento;

require_once 'vendor/autoload.php';

/*
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 200;

echo $calculadora->calcula($orcamento, new Iss()) . PHP_EOL;
*/

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 6;

echo $calculadora->calculaDescontos($orcamento) . PHP_EOL;