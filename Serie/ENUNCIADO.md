
# Enunciado

Crearemos una clase llamada Serie con las siguientes características:

+ Sus atributos son titulo, numero de temporadas, entregado, genero y creador. Por defecto, el numero de temporadas es de 3 temporadas y entregado false.

Implementar el constructor.

Los métodos que se implementara serán:

+ Métodos get y set.
+ toString.

Crearemos una clase Videojuego con las siguientes características:

+ Sus atributos son titulo, horas estimadas, entregado, genero y compañia. Por defecto, las horas estimadas serán de 10 horas y entregado false. 

Implementar el constructor.

Los métodos que se implementara serán:

+ Métodos get y set.
+ toString.

Como vemos, en principio, las clases anteriores no son padre-hija, pero si tienen en común, por eso vamos a hacer una interfaz llamada Entregable con los siguientes métodos:

+ entregar(): cambia el atributo prestado a true.
+ devolver(): cambia el atributo prestado a false.
+ isEntregado(): devuelve el estado del atributo prestado.
+ Método compareTo (Object a), compara las horas estimadas en los videojuegos y en las series el numero de temporadas. Como parámetro que tenga un objeto.

Implementa los anteriores métodos en las clases Videojuego y Serie. Ahora crea una aplicación ejecutable y realiza lo siguiente:

+ Crea dos arrays, uno de Series y otro de Videojuegos, de 5 posiciones cada uno.
+ Crea un objeto en cada posición del array, con los valores que desees.
+ Entrega algunos Videojuegos y Series con el método entregar().
+ Cuenta cuantos Series y Videojuegos hay entregados. Al contarlos, devuélvelos.
+ Por último, indica el Videojuego tiene más horas estimadas y la serie con mas temporadas. Muestralos en pantalla con toda su información (usa el método toString()).
