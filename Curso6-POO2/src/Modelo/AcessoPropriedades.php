<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades{
    public function __get($name){
        $metodo = ucfirst($name);
        $metodo = "recupera{$metodo}";
        return $this->$metodo();
    }
}