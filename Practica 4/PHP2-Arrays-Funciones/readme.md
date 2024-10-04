### Creamos un archivo .php y un readme para las respuestas.

## PHP: arrays - funciones

1) Ambos codigos tienen la misma salida, pero su forma de ser declarada es distinta, ya que el primero crea la variable y le asigna que es un array, pasandoles los valores en el momento que la crea. Y en el segundo codigo crea la variable y pero no declara que es un array ya que le asigna la clave entre []. El metodo de creacion se lo conoce como clave valor. 

2) a) La salida de este codigo es: bar 1, son los valores de las claves del array "x" y "12"

 b) La salida de este codigo es: 5 9 42, por el mismo motivo del apartado anterior

 c)En este ultimo no se observa ningun valor debido a que sus claves fuero eliminadas por medio de la funcion unset()

3) Su salida en pantalla es: Has entrado en esta pagina a las 21 horas, con 53 minutos y 13 segundos, del 4/10/2024, esto debido a que la funcion getdate(), devuelve varios valores. Con la  $fun siendo un array podemos obtener todos los valores de una fecha.

b) La salida en pantalla es 5+6=11, porque en la funcion imprime las variables que contienen los datos a sumar y los concatena con los signos + e =. Si en sumar(5,6) cambiamos los valores, obtenemos diferentes resultados.

4) Este codigo es una funcion que comprueba si el nombre de usuario es valido. Para ello primero verifica la longitud del nombre, este debe estar entre 3 y 20 caracteres. Si la longitud es valida, luego verifica que sus caracteres formen parte de los permitidos, en este caso son el abecedario en minuscula y mayuscula, los digitos del 0 al 9 y los guiones bajos y medios.
En nuestros ejemplos, nicOLas4 es valido ya que cumple ambas condiciones, en cambio pi y pia! no son validos, el primero por la longitud y el segundo por contener caracteres no permitidos.