<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
       $produtos = [
        ["nome" => "camiseta", 
        "preco" => 49.90, 
        "categoria" => "roupas"],

        ["nome" => "notebook", 
        "preco" => 3500.00,
         "categoria" => "eletronicos"],

        ["nome" => "livro", 
        "preco" => 39.90, 
        "categoria" => "livros"],

        ["nome" => "fone de ouvido", 
        "preco" => 199.00,
         "categoria" => "eletronicos"],

        ["nome" => "calça jeans", 
        "preco" => 120.00, 
        "categoria" => "roupas"]
      ];

      echo "<table>";
      echo "<tr><th class= 'cabecalho'>Nome</th><th class= 'cabecalho'>Preço</th><th class= 'cabecalho' >Categoria</th></tr>";
      
      foreach ($produtos as $produto) {
        $categoria = ($produto["categoria"]); 
        echo "<tr class='$categoria'>";
        echo "<td>" . $produto["nome"] . "</td>";
        echo "<td>R$ " . $produto["preco"] . "</td>";
        echo "<td>" . $produto["categoria"] . "</td>";
        echo "</tr>";
      }
      
      echo "</table>";
    ?>
</body>
</html>