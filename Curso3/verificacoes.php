<?php

$notas = [

    "João" => 10,
    "Maria" => 8,
    "José" => null,

];

//verifica se o array é numerico (lista) (se todas as chaves são numericas e consecutivas)
echo "array_is_list: ";
var_dump(array_is_list($notas)); 
echo PHP_EOL;

//verifica se a chave existe no array
echo "array_key_exists: ";
var_dump(array_key_exists("João", $notas));
echo PHP_EOL;

//verifica se a chave existe no array e nao é nulo
echo "isset: ";
var_dump(isset($notas["José"]));
echo PHP_EOL;

//verifica se o valor esta no array
echo "in_array: ";
var_dump(in_array(10, $notas)); // strict mode (verifica se o tipo tambem é igual)
echo PHP_EOL;

//achar a chave que possui um valor especifico (retorna a chave se achar, senao retorna false)
echo "array_search: ";
var_dump(array_search(10, $notas)); // strict mode (verifica se o tipo tambem é igual)
echo PHP_EOL;