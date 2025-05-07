<?php
    class Lampada{

        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;

        }
        public function Desligar(){
            $this->Status = False;

        }
        public function MostrarDados(){
            echo "Fabricante: " .$this->Fabricante. "<br>";
            echo "Tensão: " .$this->Tensao. "<br>";
            echo "Potência: " .$this->Potencia. "<br>";
            echo "Cor: " .$this->Cor. "<br>";

            if ($this->Status == True){
                echo "Status: LIGADA 🌞 <br><hr>";
                
            } else{
                echo "Status: DESLIGADA 🌑<br><hr>";

            }
        }
        
        #1 = VERDADDEIRO    "NADA"= FALSO
    }
?>