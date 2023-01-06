<?php

$anoNascimento = "2001"; //funciona (php converte para inteiro se a string so tiver numeros)
// $anoNascimento = "2001      "; //funciona (php ignora os espaços em branco no fim da string)
// $anoNascimento = "        2001"; //funciona (php ignora os espaços em branco no inicio da string) 
// $anoNascimento = "        2001      "; //funciona (php ignora os espaços em branco no inicio e no fim da string) 
// $anoNascimento = "a 2001"; // não funciona
// $anoNascimento = "2001  a"; //funciona mas da warning
// $anoNascimento = "2 0 0 1"; // funciona mas da warning e usa somente o primeiro numero(2)

$idade = 2022 - $anoNascimento;

echo $idade . PHP_EOL;

$anoNascimento = "a2001";

if($anoNascimento == 0){ // antes do php 8, se a string não tiver somente numeros, o php converte para 0 e isso daria true 0 == 0 // true
    echo "SIM" . PHP_EOL;
}
// a partir do php 8, se a string não tiver somente numeros, o php converte o numero zero para string e isso daria false 0 == '0' // false