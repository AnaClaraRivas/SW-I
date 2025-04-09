<!DOCTYPE html>
<html>
<head>
  <title>Tabela Gerada</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

    <?php
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];

        $i = 0;
        echo "<table>";
        while ($i < $linhas) {
            echo "<tr>";
            $contadorcolunas = 0;
            while ($contadorcolunas < $colunas) {
                echo "<td>Linha " . ($i+1) . " Coluna " . ($contadorcolunas+1) . "</td>";
                $contadorcolunas++;
            }

            echo "</tr>";
            $i++;
        }
        echo "</table>";
    ?>

</body>
</html>



