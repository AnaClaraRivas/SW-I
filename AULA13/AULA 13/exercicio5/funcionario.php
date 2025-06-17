<?php
    include_once 'Funcionario.Class.php';

    $func = new Funcionario("Ana Clara", 2500);
    $func->exibirInformacoes();

    $func->aumentarSalario(15);
    $func->exibirInformacoes();



?>