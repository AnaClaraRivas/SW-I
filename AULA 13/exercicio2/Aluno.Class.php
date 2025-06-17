<?php
    class Aluno {
        private $Nome;
        private $Nota1;
        private $Nota2;
    
    
        public function __construct($nome, $nota1, $nota2){
            $this->Nome = $nome;
            $this->Nota1 = $nota1;
            $this->Nota2 = $nota2;

        }

        public function getNome() {
            return $this->Nome;
        }

        public function getNota1() {
            return $this->Nota1;
        }

        public function setNota1($nota1) {
            $this->Nota1 = $nota1;
        }

        public function getNota2() {
            return $this->Nota2;
        }

        public function CalcularMedia(){
            return ($this->Nota1 + $this->Nota2) /2;
        }

        public function verificarSituacao(){
            $media = $this->CalcularMedia();
            if ($media >= 7){
                $resultado = "Aprovado<br><hr>";
                return $resultado;
            } else {
                $resultado = "Reprovado<br><hr>";
                return $resultado;
            }
        }

        public function ConsultaNotas(){
            echo "Nome: ". $this->Nome ."<br>";
            echo "Primeira nota: ". $this->Nota1 ."<br>";
            echo "Segunda Nota:". $this->Nota2 ."<br>";
            
        }
    }








    


?>