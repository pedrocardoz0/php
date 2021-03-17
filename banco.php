<?php
    require_once 'src/Conta.php';
    require_once 'src/Titular.php';
    require_once 'src/CPF.php';
    require_once 'src/Endereco.php';

    $endereco = new Endereco("Marilia", "Bairro Algum", "Rua algo", "312");
    $pedro = new Titular(new CPF('503.580.488-77'), 'Pedro Cardozo', $endereco);
    $primeiraConta = new Conta($pedro);

    $primeiraConta->depositar(300);

    echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
    echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
    echo $primeiraConta->getSaldo() . PHP_EOL;

    $ana = new Titular(new CPF('593.312.132-33'), 'Ana Claudia', $endereco);
    $segundaConta = new Conta($ana);

    echo "Segunda conta CPF:" . $segundaConta->recuperaCpfTitular() . PHP_EOL;

    $anotherAddress = new Endereco("Marilia", "Bairro Longe", "Rua Longe", "321");
    new Conta(new Titular(new CPF('123.142.042-93'), 'Carlos Roberto', $anotherAddress));
    unset($segundaConta);

    echo Conta::recuperaNumeroDeContas();
