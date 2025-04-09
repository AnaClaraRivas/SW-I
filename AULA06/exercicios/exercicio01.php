<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicios</title>
</head>
<body>
    <h1> Exercicio 1 - Tabela Estilizada com Cores Alternadas (FOR) </h1>
    <table>
        <tr> 
            <th>Coluna 1</th>
            <th>Coluna 2</th>
            <th>Coluna 3</th>
            <th>Coluna 4</th>

        </tr> 
        <?php
            for ($i = 1; $i <= 8; $i++) {
                if ($i % 2 == 0) {
                    $classe = "par";
                } else {
                    $classe = "impar";
                }

                echo
                "<tr class='$classe'> 
                    <td>coluna 1 linha $i</td>
                    <td>coluna 2 linha $i</td>
                    <td>coluna 3 linha $i</td>
                    <td>coluna 4 linha $i</td>
                </tr>";
            }
        ?>

    </table>
    
</body>
</html>