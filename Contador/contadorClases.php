<?php

    class Contador{

        protected int $contador;

        public function __construct(){

            $this->contador = 0;

        }

        public function __set($propiedad, $valor){

            if(property_exists($this, $propiedad)){

                return $this->propiedad = $valor;
            }
        }

        public function __get($propiedad){

            if(property_exists($this, $propiedad)){

                return $this->propiedad;
            }
        }


        public function __toString(){

            return $this->contador;
        }

        public function incrementar(){

            return $this->contador++;
        }

        public function decrementar(){

            if($this->contador > 0){
                return $this->contador--;
            } else {
                return $this->contador = 0;
            }
        }

    }

?>