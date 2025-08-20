<?php
    require 'conexao.php';

    $sql = "SELECT * FROM livro";
    $stmt = $pdo->query($sql);
    
    while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<pre>";
        print_r($livro);
        echo "</pre>";
        
       
        echo "ID: " . $livro['codlivro'] . "<br>";
        echo "Título: " . $livro['titulo'] . "<br>";
        echo "Gênero: " . $livro['genero'] . "<br>";
        echo "Ano: " . $livro['ano'] . "<br>";
        echo "Páginas: " . $livro['paginas'] . "<br>";
        echo "Autor: " . $livro['autor'] . "<br>";
        echo "Preço: R$" . $livro['preco'] . "<br>";
        echo "Sinopse: " . $livro['sinopse'] . "<br>";
        echo "Editora: " . $livro['editora'] . "<br><hr>";
    }
?>