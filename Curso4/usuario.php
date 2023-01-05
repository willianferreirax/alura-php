<?php

$email = 'Willian@alura.com.br';
$senha = '1234á';

echo strlen($senha) . PHP_EOL; // conta as strings por bytes (por isso conta um acento como um caractere inteiro)
echo mb_strlen($senha) . PHP_EOL; // para strings com acentos

if(strlen($senha) < 8) {
    echo "Senha precisa ter no mínimo 8 caracteres" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); //retorna onde onde começa a string informada ou false

$nome = substr($email, 0, $posicaoDoArroba); // Willian

$nomeComLetraMaiuscula = strtoupper($nome); // WILLIAN
// $nomeComLetraMaiuscula = mb_strtoupper($nome); // para strings com acentos

$nomeComLetraMinuscula = strtolower($nome); // willian
// $nomeComLetraMinuscula = mb_strtolower($nome); // para strings com acentos

$dominio = substr($email, $posicaoDoArroba + 1); // alura
