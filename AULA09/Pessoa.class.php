<?php 
    class Pessoa{
        /* atributos */
        public $Nome;
        public $Peso;
        public $Altura;

        /* métodos */
        public function MostrarDados(){
            echo "O nome é: " . $this->Nome . "<br>"; 
            echo "O peso é: " . $this->Peso . "<br>"; 
            echo "A altura é: " . $this->Altura . "<br>"; 
            echo "<hr>";


        }

        public function Apresentar(){
            echo "Oi o meu nome é " . $this->Nome . ", peso " . $this->Peso . " kg  e minha altura é " . $this->Altura . ". Espero que tenhamos muita diversão juntos amiguinho uhul!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! <br> <hr>";
        }
    }
?>