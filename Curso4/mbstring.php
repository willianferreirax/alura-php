<?php

$string = "Testes de integração com PHP";

echo strlen($string) . PHP_EOL; //30 (errado) (conta os bytes) (conta um acento como um caractere inteiro)
echo strtoupper($string) . PHP_EOL; // caracteres com acento nao sao convertidos

echo mb_strlen($string) . PHP_EOL; // 29 (correto) (conta os caracteres)
echo mb_strtoupper($string) . PHP_EOL; // TESTES DE INTEGRAÇÃO COM PHP

//mbstring é uma extensão do PHP que permite trabalhar com strings com acentos (multi byte string)
//existe uma versao mb pra qse todas as funcoes de string

echo mb_convert_case($string, MB_CASE_TITLE); // Testes De Integração Com Php