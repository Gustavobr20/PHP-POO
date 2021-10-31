<?php

class CPF
{   
    // Encapsulando a váriavel cpf
    private string $cpf;

    // Método construtor que irá receber e validar o valor de cpf
    public function __construct(string $cpf)
    {
        $this->validarCPF($cpf);
        $this->cpf = $cpf;
    }

    // Função que irá exibir o número do cpf
    public function recuperaNumero()
    {
        return $this->cpf;
    }

    // Função privada que irá validar o cpf
    private function validarCPF(string $cpf)
    {
        if (strlen($cpf) != 11){
            echo "O CPF deve ter 11 digitos!";
            exit();
        }
    }

    
}