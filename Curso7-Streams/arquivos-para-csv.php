<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    // $linha = [trim(utf8_decode($curso)), 'Sim']; // utf8_decode está depreciado
    
    $linha = [trim(mb_convert_encoding(string:$curso, to_encoding:"Windows-1252", from_encoding:"UTF-8")), 'Sim'];
   
    //excel não usa utf8 e sim iso-8859-1 ou windows-1252(preferencialmente) por isso damos decode
    //ficaria errado em editores de texto mas no excel fica certo

    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(mb_convert_encoding(string:$curso, to_encoding:"Windows-1252", from_encoding:"UTF-8")), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);