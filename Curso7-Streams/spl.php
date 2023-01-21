<?php

$arquivosCursos = new SplFileObject('cursos.csv', 'r');

while (!$arquivosCursos->eof()) {
    $linha = $arquivosCursos->fgetcsv();
    echo utf8_encode($linha[0]) . PHP_EOL;
}