<?php

$nome = "Willian Ferreira";

$arrayNome = explode(" ", $nome); // ["Willian", "Ferreira"]

echo "Nome: " . $arrayNome[0] . PHP_EOL; // Willian
echo "Sobrenome: " . $arrayNome[1] . PHP_EOL; // Ferreira

$telefones = ["(11) 1234-5678", "(11) 9876-5432", "(11) 9999-9999"];

echo implode(PHP_EOL, $telefones) . PHP_EOL;