<?php

$texto = 'texto com qualquer coisa poxa e caramba';

echo str_replace(
    ['poxa','caramba'], 
    ['p', 'c'], 
    $texto
) . PHP_EOL; // 'texto com qualquer coisa **** e caramba'

//substitui a ocorrencia de cada uma das letras de 'poxa' por '*' equivalente em '***', o 'a' nao é substituido pois só existem 3 caracteres em '***'
echo strtr($texto, 'poxa', '***') . PHP_EOL; // 'texto com qualquer coisa **** e caramba'

//sustitui todas as ocorrências de 'poxa' por 'p' e 'caramba' por 'c'
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']); // 'texto com qualquer coisa p e c'

