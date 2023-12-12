<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
</head>
<body>
    <?php
        include("clasesCartas.php");

        $mano = new Baraja();

        $mano->mostrarBaraja();

        $jugada = array($mano->siguienteCarta());

        echo "<br/><br/>";

        print_r($jugada);

        echo "<br/><br/>Cartas disponibles: " . $mano->cartasDisponibles();

        $pedir = $mano->darCartas(10);

        array_push($jugada, $pedir);


        echo "<br/><br/>";

        print_r($jugada);

        echo "<br/><br/>Cartas disponibles: " . $mano->cartasDisponibles();

        echo "<br/><br/>Cartas usadas: <br/>";

        print_r(Baraja::cartasMonton());


    ?>
</body>
</html>