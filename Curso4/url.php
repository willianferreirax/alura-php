<?php

$url = "https://www.alura.com.br";

str_starts_with($url, "https"); // true

if(str_starts_with($url, "https")) {
    echo "A URL $url é segura" . PHP_EOL;
} else {
    echo "A URL $url não é segura" . PHP_EOL;
}

str_ends_with($url, ".br"); // true

if(str_ends_with($url, ".br")) {
    echo "A URL $url é brasileira" . PHP_EOL;
} else {
    echo "A URL $url não é brasileira" . PHP_EOL;
}
