<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends funcionario{
    public function calculaBonificacao(): float{
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool{
        return $senha === '4321';
    }
}
