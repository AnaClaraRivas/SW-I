<?php

require_once 'Produto.Class.php';


$produto1 = new Produto("Sabão em pó", 25.00, 10);

echo "Antes das alterações:<br>";
$produto1->mostrarDetalhes();

$produto1->adicionarEstoque(5);

$produto1->removerEstoque(3);

echo "Depois das alterações:<br>";
$produto1->mostrarDetalhes();


$produto2 = new Produto("Detergente", 5.00, 35);

echo "Antes das alterações:<br>";
$produto2->mostrarDetalhes();

$produto2->adicionarEstoque(10);

$produto2->removerEstoque(8);

echo "Depois das alterações:<br>";
$produto2->mostrarDetalhes();
?>
