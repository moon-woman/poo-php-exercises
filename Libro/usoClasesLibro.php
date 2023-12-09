<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
</head>
<body>
    <?php

        include("clasesLibro.php");

        $lazarillo = new Libro("Lazarillo de Tormes", "Anónimo", 20, 0);
        $quijote = new Libro("Don Quijote", "Miguel de Cervantes", 15, 0);
        $prestado;

        echo "Función toString<br/>";

        echo $lazarillo->__toString();

        echo "<br/><br/>";

        echo $quijote->__toString();

        echo "<br/><br/>";

        echo "Pedimos un ejemplar prestado:<br/>";

        $prestado = $lazarillo->prestamo();

        if($prestado){
            echo $lazarillo->__toString();
        } else {
            echo "No se ha podido prestar el ejemplar<br/>";
        }


        echo "<br/><br/>";

        echo "Devolvemos el ejemplar:<br/>";

        $lazarillo->devolucion($prestado);

        echo $lazarillo->__toString();


    ?>
</body>
</html>