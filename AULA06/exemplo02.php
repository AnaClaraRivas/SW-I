<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr> 
            <td> id </td>
            <td> nome </td>
            <td> telefone </td>

        </tr> 
        <?php
            for ($i = 1; $i <=5; $i ++){
                echo "
                <tr> 
                    <td> coluna 2 linha $i</td>
                    <td> coluna 2 linha $i</td>
                    <td> coluna 3 linha $i</td>
                </tr> 
                ";
            }
        ?>
    </table>
</body>
</html>