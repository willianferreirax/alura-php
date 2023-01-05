<?php

$nome = "Willian Ferreira";

$ehDaMinhaFamilia = str_contains($nome, "Ferreira");

if ($ehDaMinhaFamilia) {
    echo "$nome É da minha família" . PHP_EOL;
} else {
    echo "$nome Não é da minha família" . PHP_EOL;
}