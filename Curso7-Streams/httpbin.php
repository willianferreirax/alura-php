<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => [
            'X-Teste: 123',
            'Content-Type: application/json'
        ],
        'content' => 'nome=João'
    ]
]);

echo file_get_contents(filename: 'http://httpbin.org/post', context: $contexto);