<?php


    interface Entregable{

        public function entregar();
        public function devolver();
        public function is_entregado();
        public function compareTo($a);
    }

    class Serie implements Entregable{

        protected static int $id = 0;
        protected int $copiaId;
        protected string $tituloSerie;
        protected int $numTemporadas;
        protected bool $prestado;
        protected string $generoSerie;
        protected string $creadorSerie;

        public function __construct($tituloSerie, $generoSerie, $creadorSerie, $numTemporadas = 3, $prestado = false){

            self::aumentaId();

            $this->copiaId = self::$id;
            $this->tituloSerie = $tituloSerie;
            $this->numTemporadas = $numTemporadas;
            $this->prestado = $prestado;
            $this->generoSerie = $generoSerie; 
            $this->creadorSerie = $creadorSerie;

        }

        public static function aumentaId(){


            return self::$id++;
        }

        public function __set($propiedad, $valor){

            if(property_exists($this, $propiedad)){

                return $this->$propiedad = $valor;
            }
        }

        public function __get($propiedad){

            if(property_exists($this, $propiedad)){

                return $this->$propiedad;
            }
        }

        public function __toString(){

            return "ID: " . $this->copiaId . "<br/>Título de la serie: " . $this->tituloSerie . "<br/>Número de temporadas: " . $this->numTemporadas . "<br/>Prestado: " . ($this->is_entregado() ? "Sí" : "No") . "<br/>Género: " . $this->generoSerie . "<br/>Creador/a: " . $this->creadorSerie;
        }

        public function entregar(){

            $this->prestado = true;
        }

        public function devolver(){

            $this->prestado = false;
        }

        public function is_entregado(){

            return $this->prestado;
        }

        public function compareTo($a){

            $max = max($a);

            if($this->numTemporadas == $max){
                return $this->tituloSerie;
            }
        }


    }

    class Videojuego implements Entregable{

        
        protected static int $id = 0;
        protected int $copiaId;
        protected string $tituloJuego;
        protected float $horasEstimadas;
        protected bool $prestado;
        protected string $generoJuego;
        protected string $compania;

        public function __construct($tituloJuego, $generoJuego, $compania, $horasEstimadas = 10, $prestado = false){

            $this->copiaId = self::incrementarId();
            $this->tituloJuego = $tituloJuego;
            $this->horasEstimadas = $horasEstimadas;
            $this->prestado = $prestado;
            $this->generoJuego = $generoJuego;
            $this->compania = $compania;

            
        }


        public static function incrementarId(){

            self::$id++;

            return self::$id++;
        }

        public function __set($propiedad, $valor){

            if(property_exists($this, $propiedad)){

                return $this->$propiedad = $valor;
            }
        }

        public function __get($propiedad){

            if(property_exists($this, $propiedad)){

                return $this->$propiedad;
            }
        }

        public function __toString(){

            return "ID: " . $this->copiaId . "<br/>Título del juego: " . $this->tituloJuego . "<br/>Número de horas estimadas: " . $this->horasEstimadas . "<br/>Prestado: " . ($this->is_entregado() ? "Sí" : "No") . "<br/>Género: " . $this->generoJuego . "<br/>Compañía: " . $this->compania;
        }

        public function entregar(){

            return $this->prestado = true;
        }

        public function devolver(){

            return $this->prestado = false;
        }

        public function is_entregado(){

            return $this->prestado;
        }

        public function compareTo($a){

            $max = max($a);

            if($this->horasEstimadas == $max){
                return $this->tituloJuego;
            }
        }
    }

?>