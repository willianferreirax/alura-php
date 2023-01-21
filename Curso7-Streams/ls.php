<?php

$diretorioatual = dir('.');

while ($arquivo = $diretorioatual->read()) {
    echo $arquivo . PHP_EOL;
}