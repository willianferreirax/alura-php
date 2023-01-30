<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',	
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (\Throwable $e) {
    echo "Valor a depositar precisa ser positivo" . PHP_EOL;
}