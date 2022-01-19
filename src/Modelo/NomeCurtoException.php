<?php

namespace Alura\Banco\Modelo;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

class NomeCurtoException extends \Exception
{
    public function __construct($nome)
    {
        $message = "Nome precisa ter pelo menos 5 caracteres";
        parent::__construct($message);
    }
}