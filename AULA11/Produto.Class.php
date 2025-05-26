<?php
class Produto {
    private $Nome;
    private $Preco;
    private $Quantidade;

    public function __construct($nome, $preco, $quantidade = 0){
        $this->Nome = $nome;
        $this->Preco = $preco;
        $this->Quantidade = $quantidade;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function setNome($nome) {
        $this->Nome = $nome;
    }

    public function getPreco() {
        return $this->Preco;
    }

    public function setPreco($preco) {
        $this->Preco = $preco;
    }

    public function adicionarEstoque($qntde){
        $this->Quantidade += $qntde;
    }

    public function removerEstoque($qntde){
        $this->Quantidade -= $qntde;
    }

    public function mostrarDetalhes(){
        echo "Produto: $this->Nome<br>";
        echo "Preço: R$ $this->Preco<br>";
        echo "Estoque: $this->Quantidade unidades<br><br><hr>";
    }

}
?>
