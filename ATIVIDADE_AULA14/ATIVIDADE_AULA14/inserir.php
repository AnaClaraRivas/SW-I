<?php
    require 'conexao.php';
    $titulo = "Coisas Óbvias Sobre o Amor";
    $genero = "Romance";
    $ano = 2024;
    $paginas = 616;
    $autor = "Elayne Baeta";
    $preco = 49.90;
    $sinopse = "'Coisas Óbvias Sobre o Amor' é o segundo livro da duologia 'Laranja-Forte', escrito por Elayne Baeta.";
    $editora = "Galera Record";
    $sql = "INSERT INTO livro (titulo, genero, ano, paginas, autor, preco, sinopse, editora) VALUES (:titulo, :genero, :ano, :paginas, :autor, :preco, :sinopse, :editora)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':paginas', $paginas);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':sinopse', $sinopse);
    $stmt->bindParam(':editora', $editora);

    if ($stmt->execute()) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir produto.";
    }
?>