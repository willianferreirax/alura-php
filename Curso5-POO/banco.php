<?php

require_once "src/Conta.php";

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(100); //isso é ok;
// $primeiraConta->saldo = -300; //isso não é ok;
