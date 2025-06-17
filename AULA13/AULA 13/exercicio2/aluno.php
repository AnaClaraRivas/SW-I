<?php

    include_once 'Aluno.Class.php';

    $aluno = new Aluno("Ana Clara", 5, 3);
    $aluno->ConsultaNotas();
    echo "Média: " . $aluno->CalcularMedia() . "<br>";
    echo "Situação: " . $aluno->verificarSituacao();

    $aluno2 = new Aluno("Beatriz", 9, 10);
    $aluno2->ConsultaNotas();
    echo "Média: " . $aluno2->CalcularMedia() . "<br>";
    echo "Situação: " . $aluno2->verificarSituacao();

    $aluno3 = new Aluno("Thaís", 10, 10);
    $aluno3->ConsultaNotas();
    echo "Média: " . $aluno3->CalcularMedia() . "<br>";
    echo "Situação: " . $aluno3->verificarSituacao();









?>