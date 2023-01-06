<?php

require_once "src/Conta.php";

$primeiraConta = new Conta(cpfTitular: "123.456.789-10", nomeTitular: "Willian Ferreira");
$primeiraConta->depositar(500);
$primeiraConta->sacar(100); //isso é ok;
// $primeiraConta->saldo = -300; //isso não é ok;
