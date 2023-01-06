<?php

require_once "src/Conta.php";
require_once "src/Titular.php";
require_once "src/CPF.php";

$titular = new Titular(new CPF('123.456.123-12'), "Willian Ferreira");

$primeiraConta = new Conta($titular);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100); //isso é ok;
// $primeiraConta->saldo = -300; //isso não é ok;
