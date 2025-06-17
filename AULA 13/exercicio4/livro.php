<?php
    include_once 'Livro.Class.php';

    $livro1 = new Livro("O Amor Não É Obvio", "Elayne Baeta", true);

    echo $livro1->ExibirStatus();

    $livro1->Emprestar();
    echo $livro1->ExibirStatus();

    $livro1->Emprestar();
    echo $livro1->ExibirStatus();


    $livro1->Devolver();
    echo $livro1->ExibirStatus();
?>