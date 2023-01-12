<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa {
    protected string $nome;
    private CPF $cpf;

    use AcessoPropriedades;

    public function __construct(string $nome, CPF $cpf){
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    final protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}