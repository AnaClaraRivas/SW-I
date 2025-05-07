<?php
    class Carro{
        public $Marca;
        public $Modelo;
        public $Combustivel;
        public $Portas;
        public $Capacidade_Tanque;

        public function MostrarDados(){
            echo "Marca: " .$this->Marca. "<br>";
            echo "Modelo: " .$this->Modelo. "<br>";
            echo "Combustivel: " .$this->Combustivel. "<br>";
            echo "Portas: " .$this->Portas. "<br>";
            echo "Capacidade do Tanque: " .$this->Capacidade_Tanque. "<br><hr>";


        }
    }




?>