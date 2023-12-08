<?php

    class Cuenta{

        protected string $nombre_cliente;
        protected string $num_cuenta;
        protected float $interes;
        protected float $saldo;

        public function __construct($nombre_cliente, $num_cuenta, $interes, $saldo){

            $this->nombre_cliente = $nombre_cliente;
            $this->num_cuenta = $num_cuenta;
            $this->interes = $interes;
            $this->saldo = $saldo;


        }

        public function __set($propiedad, $valor){

            if(property_exists($this, $propiedad)){

                return $this-> $propiedad = $valor;

            }
        }

        public function __get($propiedad){

            if(property_exists($this, $propiedad)){
                return $this -> $propiedad;
            }
        }

        public function __toString(){

            return "Nombre del cliente: " . $this->nombre_cliente . "<br/>Número de cuenta: " . $this->num_cuenta . "<br/>Interés: " . $this->interes . "<br/>Saldo: " . $this->saldo;
        }

        public function ingreso($cantidad){

            if ($cantidad < 0){

                return false;

            } else {

                $this->saldo+=$cantidad;

                return true;
            }


        }

        public function retirar($cantidad){

            if($this->saldo >= $cantidad){
                $this->saldo-=$cantidad;
                return true;
            } else if ($cantidad < $this->saldo || $cantidad <= 0){
                return false;
            }
        }


        public function transferir($origen, $destino, $cantidad){


            if ($origen->saldo >= $cantidad){
                $origen->saldo = $origen->saldo - $cantidad - (($cantidad * $origen->interes)/100);
                $destino->saldo+=$cantidad;
            }

        }
    }

?>