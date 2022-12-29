<?php

function exibirMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(float $valor, array $conta): array{
    if($valor > $conta['saldo']){
        exibirMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function depositar(float $valor, array $conta): array{
    if($valor > 0){
        $conta['saldo'] += $valor;
    } else {
        exibirMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [
    "123.456.789-10" => $conta1,
    "123.456.789-11" => $conta2,
    "123.456.789-12" => $conta3
];

$contasCorrentes['123.456.789-10']["saldo"] = sacar(500, $contasCorrentes['123.456.789-10'])['saldo'];

foreach ($contasCorrentes as $cpf => $conta) {
    exibirMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}