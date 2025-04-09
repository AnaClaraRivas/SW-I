<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dados = [
            [
                "nome" => "Ana Clara",
                "idade" => 16,
                "tel" => "920196326",
                "cidade" => "Ribeirão Pires",
            ],
            [
                "nome" => "Samuel",
                "idade" => 19,
                "tel" => "920156316",
                "cidade" => "Ribeirão Preto",
            ],


        ];

        // foreach ($dados as $conteudo){
        //     echo $conteudo."<br>";
        // }
        // echo $dados[0]["nome"];
        // print_r($dados[1])

        foreach ($dados as $key => $value ){
            // echo "Chave externa: ". $key."<br>";
            foreach ($dados[$key] as $chave => $valor){
                echo "$chave: ". $valor. "<br>";
               
            }
            echo "<hr>";
        }



    
    
    
    
    ?>
</body>
</html>