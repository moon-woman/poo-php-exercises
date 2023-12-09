<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <?php

        include("contadorClases.php");

        $cont = new Contador();

        echo "Contador original:<br/>";

        echo $cont->__toString();

        echo "<br/><br/>";

        echo "Contador incrementado varias veces:<br/>";

        $cont->incrementar();

        echo $cont->__toString();

        $cont->incrementar();

        echo "<br/><br/>";

        echo $cont->__toString();

        $cont->incrementar();

        echo "<br/><br/>";

        echo $cont->__toString();

        $cont->decrementar();

        echo "<br/><br/>";

        echo "Contador decrementado:<br/>";

        echo $cont->__toString();

        

    ?>
</body>
</html>