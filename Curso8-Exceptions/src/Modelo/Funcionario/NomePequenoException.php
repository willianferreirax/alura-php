<?php

class NomePequenoException extends \DomainException
{
    public function __construct()
    {
        $message = "Nome precisa ter pelo menos 5 caracteres";
        parent::__construct($message);
    }
}