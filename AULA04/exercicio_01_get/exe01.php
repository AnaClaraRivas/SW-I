<?php
    $nome = $_GET['cname'];
    $nota01 = $_GET['nota01'];
    $nota02 = $_GET['nota02'];
    $nota03 = $_GET['nota03'];

    $media = ($nota01 + $nota02 + $nota03)/3;

    echo "$nome,a média das suas notas é: $media";
?>