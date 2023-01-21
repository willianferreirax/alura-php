<?php

$file = fopen('lista.txt', 'r');

$tamanhoArquivo = filesize('lista.txt');
$frases = fread($file, $tamanhoArquivo);
//aloca o tamanho do arquivo na memória e lê o arquivo inteiro
echo $frases;

fclose($file);

// $frases = file_get_contents('lista.txt'); // faz tudo que o código acima fazs

// $frases = file('lista.txt'); // retorna cada linha como array