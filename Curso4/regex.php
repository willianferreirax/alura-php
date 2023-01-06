<?php

$telefones = ["(11) 1234 - 5678", "(11) 9876 - 5432", "(11) 9999 - 9999"];

foreach($telefones as $telefone){
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

    $telefoneValido = preg_match(
        $regex, 
        $telefone,
        $correspondecia
    );

    // contem o que foi encontrado e os grupos de captura
    var_dump($correspondecia);

    if($telefoneValido){
        echo "Telefone $telefone é válido" . PHP_EOL;
    }
    else {
        echo "Telefone $telefone inválido" . PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}