<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        $array = new SplFixedArray(2);
        $array[3] = 'Valor 1';
    } catch (RunTimeException $e) {
        echo 'Houve uma exceçao do tipo RunTimeException na funcao1' . PHP_EOL;
    }
    // $divisao = intdiv(5, 0); // funcao que trata os numeros somente como inteiro
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
