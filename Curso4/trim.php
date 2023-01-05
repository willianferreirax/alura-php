<?php

$email = '  Willian@alura.com.br ';

$email = trim($email); // remove os espaços em branco do início e do fim da string

echo $email . PHP_EOL;

$csv = ',.1,2,3,4,5,6,7,8,9,10,.';

echo trim($csv, ',.'); // remove os caracteres informados do início e do fim da string
//informar os caracteres a serem removidos todos juntos ',.'

echo PHP_EOL;

echo ltrim($csv, ',.'); // remove os caracteres informados do início da string

echo PHP_EOL;

echo rtrim($csv, ',.'); // remove os caracteres informados do fim da string

echo PHP_EOL;

