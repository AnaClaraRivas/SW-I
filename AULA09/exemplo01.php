<?php
    include_once 'Pessoa.class.php';

/*     criar um objeto -  instancia da classe pessoa */

    $fulano = new Pessoa();
    /* var_dump($fulano); */

    $ciclano = new Pessoa();

/*     atribuiur valores  */

    $fulano->Nome="FULANO DA SILVA";
    $fulano->Peso = 90;
    $fulano->Altura=1.82;

    $ciclano->Nome="CICLANO DA SILVA";
    $ciclano->Peso = 70;
    $ciclano->Altura=1.50;

/*     chamando um método da classe pessoa */

    $fulano->MostrarDados();
    $ciclano->MostrarDados();

    $fulano->Apresentar();
    $ciclano->Apresentar();

?>