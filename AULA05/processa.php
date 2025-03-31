<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == "aluno@email.com" && $senha == "1234"){
        header('Location: painel/autorizado.html');

    }else{
        header('Location: painel/naoautorizado.html');
        

    }







?>