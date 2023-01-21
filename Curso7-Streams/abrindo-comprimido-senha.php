<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '1234'
    ]
]);

echo file_get_contents('zip://arquivo.zip#lista.txt', false, $contexto);

// fopen('zip://arquivo.zip#lista.txt', 'r', false, $contexto);