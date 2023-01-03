<?php

$notasBimestre1 = [

    "João" => 10,
    "Maria" => 8,
    "José" => 7,

];

$notasBimestre2 = [

    "João" => 10,
    "Maria" => 8,

];

//retorna um novo array com os elementos (mantendo chave e valor) do primeiro parametro cujo os VALORES nao estao nos outros parametros(infinitos)
//portanto se o valor 7 existir no segundo array, mesmo em outra chave ele nao sera retornado	
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//retorna um novo array com os elementos (mantendo chave e valor) do primeiro parametro cujo as CHAVES nao estao nos outros parametros(infinitos)
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//retorna um novo array com os elementos (mantendo chave e valor) do primeiro parametro cujo CHAVE E VALOR nao estao nos outros parametros(infinitos)
//portanto joao seria retornado se sua nota mudasse no segundo array para 9 (retornaria joao => 10, que é o elemento que nao foi encontrado no 2o array)
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

var_dump(array_keys($alunosFaltantes)); //retorna um array com as chaves do array passado como parametro
var_dump(array_values($alunosFaltantes)); //retorna um array com os valores do array passado como parametro

//retorna um array com as chaves e valores passados como parametro (os 2 arrays precisam ter o mesmo tamanho)
var_dump(array_combine( array_values($alunosFaltantes), array_keys($alunosFaltantes)));

array_flip($alunosFaltantes); //inverte as chaves com os valores (se a chave for numerica, ela se torna o valor e vice-versa)