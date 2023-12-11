<?php

    class Empleado{

        protected static int $id = 0;
        protected int $idEmpleado;
        protected string $nombre;
        protected float $sueldo;

        public function __construct($nombre, $sueldo){

            self::asignaId();
            $this->idEmpleado = self::$id;
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        public function asignaId(){

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
            return "ID del empleado: " . $this->idEmpleado . "<br/>Nombre: " . $this->nombre . "<br/>Sueldo: " . $this->sueldo . "<br/>Pago de impuestos: " . ($this->pagaImpuestos() ? "Sí" : "No");
        }

        public function pagaImpuestos(){

            if($this->sueldo > 3000){
                return true;
            } else {
                return false;
            }
        }
    }

?>