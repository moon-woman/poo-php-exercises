<?php

    class Libro{


        static protected int $id = 0;
        protected int $copiaId;
        protected string $nombreLibro;
        protected string $nombreAutor;
        protected int $numEjemplares;
        protected int $numPrestados;

        public function __construct($nombreLibro, $nombreAutor, $numEjemplares, $numPrestados){

            $this->copiaId = self::aumentarId();
            $this->nombreLibro = $nombreLibro;
            $this->nombreAutor = $nombreAutor;
            $this->numEjemplares = $numEjemplares;
            $this->numPrestados = $numPrestados;

        }

        public static function aumentarId(){

            self::$id++;

            return self::$id;
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

            return "ID: " . $this->copiaId . "<br/>Nombre del libro: " . $this->nombreLibro . "<br/>Nombre autor/a: " . $this->nombreAutor . "<br/>Número de ejemplares disponibles: " . $this->numEjemplares . "<br/>Número de ejemplares en préstamo: " . $this->numPrestados;
        }

        public function prestamo(){

            if($this->numEjemplares > 0){
                $this->numPrestados++;
                $this->numEjemplares--;
                return true;
            } else {
                return false;
            }
        }

        public function devolucion($prestado){

            if($prestado){
                $this->numPrestados--;
                $this->numEjemplares++;
                return true;
            } else {
                return false;
            }


        }
    }

?>