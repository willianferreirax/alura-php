<?php

$arquivo = fopen("zip://lista.zip#lista.txt", "r");
stream_copy_to_stream($arquivo, STDOUT);