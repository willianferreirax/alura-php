<?php

$notas = [
    [
        "nome" => "João",
        "nota" => 7
    ],
    [
        "nome" => "Maria",
        "nota" => 9
    ],
    [
        "nome" => "José",
        "nota" => 5
    ]
];

function ordenaNotas(array $nota1, array $nota2) : int{ // a funçao deve retornar um inteiro (0, 1 ou -1)

    if($nota1["nota"] > $nota2["nota"]){
        return - 1; // o primeiro parametro(nota1) precisa vir antes no array
    }

    if($nota2["nota"] > $nota1["nota"]){
        return 1; // o segundo parametro (nota2) precisa vir antes no array
    }

    return 0; // os dois parametros são iguais, nao precisa mudar a ordem

    // return $nota2["nota"] <=> $nota1["nota"]; // <=> spaceship operator (da na mesma que fazer isso aqui)
    //se o primeiro operador for maior que o segundo, retorna -1
    //se o segundo operador for maior que o primeiro, retorna 1
    //se os dois forem iguais, retorna 0
}


usort($notas, "ordenaNotas");

var_dump($notas);
