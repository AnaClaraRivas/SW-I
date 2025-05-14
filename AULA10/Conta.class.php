<?php 

    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){

            if($valor > $this->Saldo){
                $resultado= "Saldo Insuficiente <br><hr>";
                return $resultado;
                
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $resultado = "Saldo atualizado para R$: ". $this->Saldo ."<br><hr>";
                return $resultado;
            }

        }

        public function Depositar($valor){

            $this->Saldo = $this->Saldo + $valor;
            $resultado = "Saldo atulizado para R$: ". $this->Saldo ."<br><hr>";
            //$this->Saldo += $valor
            
            return $resultado;

        }

        public function ConsultarSaldo(){
            echo "Nome: ". $this->Nome ."<br>";
            echo "CPF: ". $this->Cpf ."<br>";
            echo "Saldo Atual: R$ ". $this->Saldo ."<br><hr>";
        }
    }


?>