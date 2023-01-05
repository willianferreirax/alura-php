<?php

//exemplo do artigo "Trabalhando com arrays em php"

$lista = '[
    {
        "pais": "Brasil",
        "medalhas": {
            "ouro": 3,
            "prata": 5,
            "bronze": 3
        }
    },
    {
        "pais": "Costa rica",
        "medalhas": {
            "ouro": 5,
            "prata": 4,
            "bronze": 4
        }
    },
    {
        "pais": "Estados unidos",
        "medalhas": {
            "ouro": 4,
            "prata": 3,
            "bronze": 5
        }
    },
    {
        "pais": "Trindade e tobago",
        "medalhas": {
            "ouro": 4,
            "prata": 3,
            "bronze": 4
        }
    }
]';


$lista = json_decode($lista, true);
var_dump($lista);

$numero_de_paises = count($lista);
$numero_de_medalhas_total = 0;

$lista = array_map(function ($item) use (&$numero_de_medalhas_total) {
	$numero_de_medalhas_total += array_sum($item['medalhas']);
    $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
    return $item;
}, $lista);

$numero_de_medalhas_total = array_reduce($lista, function($valorAtual, $proxValor){
	$medalhasDoPais = array_reduce($proxValor['medalhas'], function($valorAtual, $proxValor){
		return $valorAtual + $proxValor;
	}, 0);
	
	return $valorAtual + $medalhasDoPais;
	
}, 0);

usort($lista, function($a, $b){
	
	$a = $a["medalhas"];
	$b = $b["medalhas"];
	
	if($a['ouro'] > $b['ouro']){
        return - 1; // o primeiro parametro(nota1) precisa vir antes no array
    }

    if($b['ouro'] > $a['ouro']){
        return 1; // o segundo parametro (nota2) precisa vir antes no array
    }
    
    if($a['prata'] > $b['prata']){
        return - 1; // o primeiro parametro(nota1) precisa vir antes no array
    }

    if($b['prata'] > $a['prata']){
        return 1; // o segundo parametro (nota2) precisa vir antes no array
    }
    
    if($a['bronze'] > $b['bronze']){
        return - 1; // o primeiro parametro(nota1) precisa vir antes no array
    }

    if($b['bronze'] > $a['bronze']){
        return 1; // o segundo parametro (nota2) precisa vir antes no array
    }
    
    return 0;
    
});

var_dump($lista);

echo $numero_de_paises . PHP_EOL;
echo $numero_de_medalhas_total;

