<?php
$nomeusuario =  $_POST['usua'];
$senha = $_POST['senha'];

if ($nomeusuario == "etec" && $senha == "informática"){
    echo "Logado com sucesso!";
}

else {
    echo "Login negado!";
}
?>