<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie</title>
</head>
<body>

    <?php

        include("serieClases.php");

        //código con la clase Serie

        $series = array("serie1" => new Serie("Girls", "Drama", "Lena Dunham", 6), "serie2" => new Serie("Fleabag", "Comedy", "Phoebe Waller-Bridge", 2), "serie3" => new Serie("Crazy ex-girlfriend", "Comedy", "Rachel Bloom", 4), "serie4" => new Serie("Nana", "Shojo", "Ai Yazawa", 1), "serie5" => new Serie("One Piece", "Adventure", "Yoshihiro Suzuki", 20));


        $contador = 0;

        $cantTemporadas = [];

        $max;

        $series["serie1"]->entregar();
        $series["serie2"]->entregar();
        $series["serie4"]->entregar();

        echo "Series prestadas: <br/>";

        foreach($series as $serie){

            if($serie->is_entregado() === true){

                echo $serie->__toString() . "<br/><br/>";

                $contador++;

            }
        }

        echo "<br/>Hay $contador series prestadas";

        foreach($series as $clave => $serie){
            $cantTemporadas[$clave] = $serie->numTemporadas;
        }

        foreach($series as $serie){

            $max = $serie->compareTo($cantTemporadas);
        }



        echo "<br/><br/>La serie con más temporadas es: " . $max;

        //código con la clase videojuego


        echo "<br/><br/>";

        $contJ = 0;
        $maxJ;


        $juegos = array("juego1" => new Videojuego("Monopoly", "Familia", "Parker Brothers"), "juego2" => new Videojuego("Moira", "Comedia", "Moira SA", 20), "juego3" => new Serie("Heroes of Hellas", "Puzzle", "Griegos SL", 40), "juego4" => new Videojuego("Solitario", "Cartas", "Microsoft"), "juego5" => new Videojuego("The Sims 4", "Simulación", "EA Sports", 200));

        $cantHoras = [];

        $juegos["juego1"]->entregar();
        $juegos["juego2"]->entregar();
        $juegos["juego4"]->entregar();

        echo "Juegos prestados: <br/>";

        foreach($juegos as $juego){

            if($juego->is_entregado() === true){

                echo $juego->__toString() . "<br/><br/>";

                $contJ++;

            }
        }

        echo "<br/>Hay $contJ juegos prestados";

        foreach($juegos as $clave => $juego){
            $cantHoras[$clave] = $juego->horasEstimadas;
        }

        foreach($juegos as $juego){

            $maxJ = $juego->compareTo($cantHoras);
        }



        echo "<br/><br/>El juego que más horas tiene por estimación: " . $maxJ;



    ?>
    
</body>
</html>