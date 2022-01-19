<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\NomeCurtoException;

require_once 'autoload.php';

try{
    $conta1 = new ContaCorrente(
        new Titular(new CPF('122.456.789-85'), 'Pat',
            new Endereco('Resende', 'CDA', 'Hortências', '25')));

}catch(NomeCurtoException $exception){
    echo "Nome inválido." . PHP_EOL;
    echo $exception->getMessage();
}catch(InvalidArgumentException $exception){
    echo "CPF Inválido.";
}
