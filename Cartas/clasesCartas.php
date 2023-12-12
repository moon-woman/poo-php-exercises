<?php

    class Baraja{

        protected $baraja = array();

        public function __construct(){

            $this->asignaNum();


        }

        public function asignaNum(){

            do{

                $numRand = random_int(1, 12);

                while ($numRand == 8 || $numRand == 9){

                    $numRand = random_int(1, 12);

                }
                $palo = $this->asignaPalo();



                $this->baraja[] = array(
                    $palo => $numRand
                );


            } while (count($this->baraja) < 40);
            
        }


        public function asignaPalo(){

            $palos = ["Espadas", "Bastos", "Oros", "Copas"];

            return $palos[random_int(0, 3)];
        }

        public function barajar(){

            shuffle($this->baraja);

        }

        public function siguienteCarta(){

            if(count($this->baraja) == 0){
                echo "No hay más cartas para repartir";
            } else {
                $sig = array_shift($this->baraja);
                self::cartasMonton($sig);
                return $sig;
            }
        }

        public function cartasDisponibles(){
            return count($this->baraja);
        }

        public function darCartas($pedidas){

            $entregadas = array();

            if($pedidas < $this->cartasDisponibles()){

                for($i=0;$i<$pedidas;$i++){
                    $carta = array_shift($this->baraja);
                    $entregadas[] = $carta;
                    self::cartasMonton($entregadas);
                }


                return $entregadas;

            } else {
                echo "No se pueden dar más cartas";
            }
        }

        public static function cartasMonton($carta = null){

            static $usadas = array();

            if($carta !== null){

                array_push($usadas, $carta);
            }


            return $usadas;
        }

        public function mostrarBaraja(){

            foreach($this->baraja as $carta){

                foreach($carta as $palo => $numero){
                    echo $palo . ": " . $numero . "<br>";
                }

            }
        }
    }

?>