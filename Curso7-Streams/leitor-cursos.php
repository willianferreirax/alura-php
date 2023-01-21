<?php

$file = fopen('lista.txt', 'r');

while (!feof($file)) {
    $line = fgets($file);
    echo $line . PHP_EOL;
}

fclose($file);