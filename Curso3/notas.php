<?php

$notas = [

    10,8,7,9,7,6

];

//ordena em ordem decrescente
rsort($notas);

var_dump($notas);

$notas2 = [
    
    "João" => 10,
    "Maria" => 8,
    "José" => 7,
    "Ana" => 9,
    "Pedro" => 7,
    "Paulo" => 6
    
];

//usado para manter as chaves
asort($notas2);
arsort($notas2);

echo "nota2: ";
var_dump($notas2);

//ordenar pela chave
ksort($notas2);
krsort($notas2);

//ordenar por funcao definida pelo usuario pela chave
uksort($notas2, function($chave1, $chave2){
    return $chave1 <=> $chave2;
});

//ordenar por funcao definida pelo usuario pelo valor mantendo as chaves
uasort($notas2, function($nota1, $nota2){
    return $nota1 <=> $nota2;
});

//a - associative
//k - key
//u - user
//r - reverse
