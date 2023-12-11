<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
</head>
<body>
    <?php

        include("claseEmpleado.php");

        $empleado1 = new Empleado("María", 360);
        $empleado2 = new Empleado("Moira", 4500);

        echo "Datos de los empleados: <br/><br/>";

        echo $empleado1->__toString() . "<br/><br/>" . $empleado2->__toString();
    ?>
</body>
</html>