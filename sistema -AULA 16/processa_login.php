<?php

    session_start();

    include_once 'conexao.php';

    $email =$_POST['email'];
    $senha =$_POST['senha'];


    $consulta = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    

    $stmt = $pdo->prepare($consulta);

    // vincula os parametros

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        // executa a consulta
    $stmt->execute();

    // obtem o n de registros encontrados

    $num_registros = $stmt->rowCount();

    // obtem o resultado
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // exibe o n de reistros enconrads no bd
    var_dump($resultado);

    if ($num_registros == 0){
        echo "voce nao tem permissão";

        header("Location:index.php");

    }else{
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];

        header("Location:restrita.php");

        // echo "acesso permitido para a restrita.php";
    }

?>