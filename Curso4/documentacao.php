<?php

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL; // hello all, I said hi

echo str_replace(array_keys($trans), array_values($trans), "hi all, I said hello"); // hello all, I said hello