<?php

class Titular
{   
    // Modelo de dados Titular
    private $cpf;
    private $titular;

    // Método construtor que irá receber os dados de titular
    public function __construct(CPF $cpf, string $titular)
    {
        $this->cpf = $cpf;
        $this->validaTitular($titular);
        $this->titular = $titular;
    }

    // Método para verificar o titular da conta
    public function verTitular(): string
    {
        return $this->titular;
    }

    // Método para verificar o cpf da conta
    public function verCPF(): string
    {
        return $this->cpf->recuperaNumero();
    }
    

    // Método que válida se o nome do titular tem menos de 5 caracteres
    private function validaTitular(string $titular)
    {
        if (strlen($titular) < 5){
            echo "Nome precisa ter pelomenos 5 caracteres";
            exit();
        }
    }

}