# Enunciado
Escribe una clase Cuenta para representar una cuenta bancaria. Los datos de la cuenta son: nombre del cliente, número de cuenta, tipo de interés y saldo.

La clase contendrá los siguientes métodos:
+ Constructor.
+ Métodos setters/getters para asignar y obtener los datos de la cuenta.
+ Métodos ingreso y retirar. Un ingreso consiste en aumentar el saldo en la cantidad que se indique. Esa cantidad no puede ser negativa. Un retirar consiste en disminuir el saldo en una cantidad pero antes se debe comprobar que hay saldo suficiente. La cantidad no puede ser negativa. Los métodos ingreso y retirar devuelven true si la operación se ha podido realizar o false en caso contrario.
+ Método transferencia que permita pasar dinero de una cuenta a otra siempre que en la cuenta de origen haya dinero suficiente para poder hacerla.