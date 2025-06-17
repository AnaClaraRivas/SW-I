<?php
    class Retangulo {
        private $largura;
        private $altura;

        public function setLargura($largura) {
                $this->largura = $largura;
        }

        public function getLargura() {
            return $this->largura;
        }

        public function setAltura($altura) {
                $this->altura = $altura;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function calcularArea() {
            return $this->largura * $this->altura;
        }

        public function calcularPerimetro() {
            return 2 * ($this->largura + $this->altura);
        }

         public function exibirResultados() {
            echo "Largura: " . $this->getLargura() . "<br>";
            echo "Altura: " . $this->getAltura() . "<br>";
            echo "Área: " . $this->calcularArea() . "<br>";
            echo "Perímetro: " . $this->calcularPerimetro() . "<br><hr>";
    }
    }

?>