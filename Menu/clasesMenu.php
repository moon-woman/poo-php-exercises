<?php

    class Menu{

        protected $enlace = array();
        protected $titulo = array();


        public function __set($propiedad, $valor){

            if($property_exists($this, $propiedad)){

                return $this->$propiedad = $valor;
            }
        }


        public function __get($propiedad){

            if($property_exists($this, $propiedad)){
                return $this->$propiedad;
            }
        }

        public function add($e, $t){

            $this->enlace[] = $e;
            $this->titulo[] = $t;
        }

        public function vertical(){

            foreach($this as $clave){
                
                foreach($clave as $dato){

                    echo "<a href='#'>$dato</a><br/>";
                }

            }
        }

        public function horizontal(){
            foreach($this as $clave){
                
                foreach($clave as $dato){

                    echo "<a href='#'>$dato</a>" . " ";
                }

            }
        }
    }

?>