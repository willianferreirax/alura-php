<?php

$alunos2021 = [

    "João",
    "Maria",
    "José",

];

$novosAlunos = [

    "Patricia",
    "Pedro",
    "Paulo",
    "Ana"
];

//junta os arrays retornando um novo (sem preservar as chaves se forem numericas, se forem strings, preserva as chaves porem os valores do 2o array sao mantidos se a mesma chave estiver nos 2 (ou no ultimo array em que ela aparece))
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);

//utilizando o operador +
//se as chaves forem explicitas, comportamento igual ao array_merge
//se as chaves forem numericas, ira manter os elementos do primeiro array até que encontre uma chave que nao estava no primeiro
$alunos2022 = $alunos2021 + $novosAlunos; // muito instavel e ambiguo
var_dump($alunos2022);

//utilizando spread operator (...) (array unpacking)
//mesmo comportamento do array_merge, a diferença é que é possivel adicionar um elemento aleatorio no meio do array
// [...$alunos2021, 'Will' ,...$novosAlunos]
//so funciona a partir do php 7.4, para arrays com chaves string só funciona a partir do php 8.1
$alunos2022 = [...$alunos2021, ...$novosAlunos];

//adiciona um elemento (infinitos) no final do array
//retorna o numero de elementos que o array passou a ter
array_push($alunos2022, "Will", "alice", 'bob'); 
var_dump($alunos2022);

//de outra forma
$alunos2022[] = "Will"; //adiciona um elemento no final do array
var_dump($alunos2022);

array_unshift($alunos2022, "teste2"); //adiciona um elemento no inicio do array
var_dump($alunos2022);

//list (tupla)
$dados = ["João", 10, 8];

list($nome, $nota, $idade) = $dados;
// [$nome, $nota, $idade] = $dados; // mesmo resultado

//para arrays associativos
$dados = [
    "nome" => "João",
    "nota" => 10,
    "idade" => 8
];

//é preciso passar o nome da chave como parametro
['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

$contas = [
    [
        'titular' => 'Vinicius Dias',
        'saldo' => 100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais" . PHP_EOL;
}

extract($dados); //cria variaveis com o nome das chaves do array e atribui os valores das chaves aos valores das variaveis
//nao usar em dados nao confiaveis(externos)

var_dump($nome, $nota, $idade);

$dados2 = compact('nome', 'nota', 'idade'); //cria um array associativo com os nomes das variaveis como chaves e os valores das variaveis como valores

var_dump($dados2);
