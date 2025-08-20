<?php
    require 'conexao.php';

    $id = 4;
    $novoPagina = 181;

    $sql = "UPDATE livro SET paginas = :paginas WHERE codlivro = :id";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':paginas', $novoPagina);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto.";
    }
?>