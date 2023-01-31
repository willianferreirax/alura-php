<?php

$arquivosCursos = new SplFileObject('cursos.csv', 'r');

while (!$arquivosCursos->eof()) {
    $linha = $arquivosCursos->fgetcsv();
    echo mb_convert_encoding(string: $linha[0], to_encoding: "Windows-1252", from_encoding: "UTF-8") . PHP_EOL;
}