<?php

require_once 'MeuFiltro.php';

$arquivo = fopen('cursos-php.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivo, 'alura.partes');

echo fread($arquivo, filesize('cursos-php.txt'));