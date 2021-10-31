<?php

class Conta
{
    // Modelo de dados da conta
    private $titular;
    private float $saldo = 0;
    private static $numeroDeContas = 0; // Atributo estático é um atributo próprio da Classe

    // Método construtor que irá ser iniciado na hora da criação de conta
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        // Acessando o atributo estático passando 2 pontos, toda vez que uma conta é criada ele vai adicionando na contagem.
        self::$numeroDeContas++; 
    }

    // Método para sacar valor da conta
    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo){ // O $this referencia a conta que estamos passando.
            echo "Saldo indisponível!";
        } else {
            $this->saldo -= $valorASacar;  
        }
    }

    // Método para depositar valor na conta
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O Deposito deve ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }

    // Método para fazer transferencia entre contas
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }

    // Exibe o saldo da conta
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    // Exibe o nome do titular
    public function recuperaTitular(): string
    {
        return $this->titular->verTitular();
    }

    // Exibe o cpf do titular
    public function recuperaCPF()
    {
        return $this->titular->verCPF();
    }

    // Método estático que irá mostrar o número de contas criadas
    public static function verNumeroContas(): int {
        return self::$numeroDeContas;
    }

}
