<?php

$string = '1 2 3 4';

var_dump(explode(' ', $string, 2));
//ultimo parametro é o limite de elementos no array, o resto será colocado no ultimo elemento