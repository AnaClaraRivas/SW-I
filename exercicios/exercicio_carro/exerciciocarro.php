<?php
    include_once 'Carro.class.php';
    
    $carro1 = new Carro();
    $carro2 = new Carro();
    $carro3 = new Carro();
    $carro4 = new Carro();
    $carro5 = new Carro();

    $carro1->Marca = "Renault";
    $carro1->Modelo = "Sandero";
    $carro1->Combustivel = "Flex (Gasolina/Etanol)";
    $carro1->Portas = 4;
    $carro1->Capacidade_Tanque = 38;

    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();










?>