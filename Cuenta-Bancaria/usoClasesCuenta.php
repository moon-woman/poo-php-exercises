<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta bancaria</title>
</head>
<body>
    <?php

        include("clasesCuenta.php");

        $cuenta1 = new Cuenta("María", "ES6520957041312875730777", 2.5, 1200);
        $cuenta2 = new Cuenta("Gonzalo", "ES8515442032075911020008", 3.6, 34000);
        $cuenta3 = new Cuenta("Rocio", "ES8031838247101938473782", 1, -1000);

        echo "Estado inicial de las cuentas: <br/>";

        echo $cuenta1->__toString();
        echo "<br/><br/>";
        echo $cuenta2->__toString();
        echo "<br/><br/>";
        echo $cuenta3->__toString();

        echo "<br/><br/>";

        echo "Ingresamos 50 en las dos primeras cuentas: <br/>";

        $cuenta1->ingreso(50);
        $cuenta2->ingreso(50);

        echo $cuenta1->__toString();
        echo "<br/><br/>";
        echo $cuenta2->__toString();

        echo "<br/><br/>";

        echo "Retiramos 120 en las dos primeras cuentas: <br/>";

        $cuenta1->retirar(120);
        $cuenta2->retirar(120);

        echo $cuenta1->__toString();
        echo "<br/><br/>";
        echo $cuenta2->__toString();

        echo "<br/><br/>";

        echo "Hacemos una transferencia a Rocío: <br/>";

        $cuenta3->transferir($cuenta2, 10000);

        echo $cuenta3->__toString();
        echo "<br/><br/>";
        echo $cuenta2->__toString();


        echo "<br/><br/>";

        echo "Ingreso negativo: <br/>";

        if(!$cuenta1->ingreso(-3000)){

            echo "No se puede ingresar en negativo. <br/>";

        } else {
            echo $cuenta1->__toString();
        }

        echo "<br/><br/>";

        echo "Retirada negativa: <br/>";

        if(!$cuenta2->retirar(-2000)){
            echo "No se puede retirar en negativo. <br/>";
        } else {
            echo $cuenta2->__toString();
        }

        echo "<br/><br/>";

        echo "Retirada con saldo insuficiente: <br/>";

        if(!$cuenta1->retirar(2000)){
            echo "No tienes saldo suficiente. <br/>";
        } else {
            $cuenta1->__toString();
        }

        echo "<br/><br/>";

        echo "Tranferencia con saldo insuficiente: <br/>";


        if(!$cuenta1->transferir($cuenta2, 2000)){
            echo "No tienes saldo suficiente para la transferencia <br/>";
        } else {
            $cuenta1->__toString();
        }



        







        



    ?>
</body>
</html>