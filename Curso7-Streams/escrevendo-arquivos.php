<?php

$arquivo = fopen('cursos-php.txt', 'a+');

$curso = 'Curso de PHP';

fwrite($arquivo, $curso);

fclose($arquivo);

// file_put_contents('cursos-php.txt', 'Curso de PHP', FILE_APPEND); // faz tudo que o código acima fazs