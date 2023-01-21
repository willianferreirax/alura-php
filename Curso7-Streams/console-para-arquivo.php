<?php

// $teclado = fopen('php://stdin', 'r');

// $novoCurso = fgets($teclado);

$novoCurso = fgets(STDIN); // faz tudo que o código acima fazs

file_put_contents('cursos-php.txt', PHP_EOL . $novoCurso, FILE_APPEND);