<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular(new Cpf('12345678910'), 'Gustavo Henrique'));
$primeiraConta->depositar(200);

echo $primeiraConta->recuperaCPF() . PHP_EOL;
echo $primeiraConta->recuperaTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo Conta::verNumeroContas();

$segundaConta = new Conta(new Titular(new Cpf('23155489800'), 'Maria Silva'));