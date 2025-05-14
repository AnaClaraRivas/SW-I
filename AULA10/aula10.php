<?php

    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Fulano da Silva";
    $conta1->Cpf = "123.456.789-00";
    // $conta-Saldo = 1500;

    $conta1->ConsultarSaldo();
    
    echo $conta1->Depositar(500);
    
    $conta1->ConsultarSaldo();
    
    echo $conta1->Sacar(700);
   
    $conta1->ConsultarSaldo();
    


?>