<?php

$alunos2021 = [

    "João",
    "Maria",
    "José",

];

$novosAlunos = [

    "Patricia",
    "Pedro",
    "Paulo",
    "Ana"
];

//junta os arrays retornando um novo (sem preservar as chaves se forem numericas, se forem strings, preserva as chaves porem os valores do 2o array sao mantidos se a mesma chave estiver nos 2 (ou no ultimo array em que ela aparece))
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);

//utilizando o operador +
//se as chaves forem explicitas, comportamento igual ao array_merge
//se as chaves forem numericas, ira manter os elementos do primeiro array até que encontre uma chave que nao estava no primeiro
$alunos2022 = $alunos2021 + $novosAlunos; // muito instavel e ambiguo
var_dump($alunos2022);

//utilizando spread operator (...) (array unpacking)
//mesmo comportamento do array_merge, a diferença é que é possivel adicionar um elemento aleatorio no meio do array
// [...$alunos2021, 'Will' ,...$novosAlunos]
//so funciona a partir do php 7.4, para arrays com chaves string só funciona a partir do php 8.1
$alunos2022 = [...$alunos2021, ...$novosAlunos];