<?php
class Funcionario {
    private $Nome;
    private $Salario;

    public function __construct($nome, $salario) {
        $this->Nome = $nome;
        $this->Salario = $salario;
    }

    public function getSalario() {
        return $this->Salario;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function aumentarSalario($porcentagem) {
        $this->Salario += $this->getSalario() * ($porcentagem / 100);
    }

    public function exibirInformacoes() {
        echo "Nome: " . $this->Nome . "<br>";
        echo "Salário: R$ " . $this->Salario . "<br><hr>";
    }
}
?>
