<?php

function geraEmail(string $nome): void{
    //heredoc - equivalente a aspas duplas ""
    $conteudoEmail = <<<FINAL
    Olá $nome, tudo bem?

    Estamos entrando em contato para
    {{motivo}}.

    {{assinatura}}

    FINAL;
    //o php remove todo o espaço antes da palavra FINAL, assim a identação nao vai parar no texto final

    //nowdoc - não interpreta variaveis - funciona como uma string de aspas simples ''
    $conteudoEmail = <<<'FINAL'
    Olá $nome, tudo bem?

    Estamos entrando em contato para
    {{motivo}}.

    {{assinatura}}

    FINAL;

    echo $conteudoEmail;
}

geraEmail('willian');