### Creamos un archivo .php y un readme para las respuestas.

## PHP: variables, tipos, operadores, expresiones, estructuras de control

1) 
    - las variables y su tipo: Las variables se identifican con el signo $, en este caso tenemos:
    $a -> boolean
    $b y $c -> string
    $d, $f y $g -> integer
$a, $b, $c y $d estan definidas al inicio, a $f y $g se les asigna un valor luego

    - los operadores: Los operadores que podemos observar son:
    * multiplicacion 
    ++ incremento
    = asignacion
    += suma
    ?: operador ternario

    - las funciones y sus parámetros: El codigo tiene 3 funciones:
        - function doble($i) {
            return $i*2;
        }
        - is_int
        - is_string
    
    Toma el parametro $i y devuelve el doble, en este caso no devuelve nada porque $i no esta definida.
# no se si sumarle is_int y is_string
    - las estructuras de control: Se usa una estructura de control dos veces,
    I. if (is_int($d)) {
            $d += 4;
       }
    Para determiar si $d es un integer
    II. if (is_string($a)) {
            echo "Cadena: $a";
       }
    Para determinar si $a es un string.

    - cuál es la salida por pantalla: Si ejecutamos el codigo, la salida por pantalla es: boolean string string integer 1xyzxyz184444

2) Indicar si los siguientes códigos son equivalentes
a)
El primer codigo inicializa la variable $i en 1, luego usa un while para hacer que mientras $1 sea menor igual a 10 entonces, mostrar y aumentar el valor de i con el operador binario incremento ++. Su salida en pantalla es: 12345678910

El segundo codigo tambien inicializa la variable $i en 1 y usa el while con la misma condicion que el primer codigo, en lo que cambia es que muestra el valor de i y luego aumenta su valor con el operador ++. Muestra el valor de i pero atrasado. Su salida en pantalla es: 12345678910.

El tercer codigo, a diferencia de los otros dos, inicializa la variable $i en 0. Despues usa una estructura do while, imprime el valor y luego lo incrementa en 1, ya que el ++ esta dentro del print y despues de la variable. Ademas, La variable ingresa con 0, se ejecuta incrementandose en 1 y por ultimo analiza la condicion. Su salida en pantalla es: 0123456789

b)
El primer codigo, utiliza un for, inicializa la variable $i en 1, tiene como condición continuar mientras el valor de la variable $i sea menor o igual a 10, y en cada iteración, el valor de $i se incrementa una unidad y lo muestra. Por lo que la salida en pantalla es: 12345678910.

El segundo código, también utiliza un for, con las mismas condiciones que el anterior. Pero con la diferencia de que tiene el print $i dentro de las caracteristicas del for, esto hace que en cada iteración se muestre el valor de $i y luego se incremente en una unidad. Su salida en pantalla es igual al anterior: 12345678910.

El tercer código, utiliza las estructuras for e if. El for, al igual que los códigos anteriores, se inicializa la variable $i en 1 y en cada iteración se incrementa su valor en 1. La diferencia con los otros es que en vez de tener una condición para salir del bucle, usa la estructura if, tiene como condición que si el valor de la variable $i es mayor a 10 entonces se termina el bucle. Por último, el print $i que se encuentra fuera del if pero dentro del for, hace que en cada iteración, se muestre el valor de $i, entonces. Su salida en pantalla es: 12345678910.

El cuarto y último código tiene al igual que el tercero, las estructuras if y for. Se diferencia porque se inicializa la variable $i fuera del for, en esta no se declara nada ya que
dentro tiene un if con una condicion $i > 10, si es que cumple esa condicion entra en el if y ejecuta el break. Luego fuera del if pero dentro del for imprime el valor de la variable $i y luego de mostrarla la incrementa. Su salida en pantalla es: 12345678910.

c)
El primer codigo nos muestra un error al ejecutarlo ya que no esta declarada la variable $i, si lo estuviera y tuviera un valor entre 0 y 2, mostraria el mensaje correspondiente al numero.

En el segundo codigo muestra  un error al ejecutarlo ya que no esta declarada la variable $i.
El switch evalúa la variable $i.
Dependiendo del valor de $i, se ejecuta el bloque de código correspondiente al case que coincide con el valor de $i.
Si $i no coincide con ninguno de los case especificados (0, 1, 2), no se ejecuta ningún bloque de código.

3a)
Este codigo genera una tabla "dinamica", ya que con solo cambiar el valor de las variables $row y $col, se modifica automaticamente sus cantidad de filas o columnas respectivamente, esto gracias a que estan dentro de un for. Con el primer echo, genera la tabla y sus especificaciones, por ejemplo que su ancho sea el 90% de su contendor y que el grosor del borde es de 1px. Mientras que el echo del segundo for con la etiqueta td, con el valor &nbsp genera espacios en blanco dentro de cada casilla de la tabla.

b)
Este codigo genera un formulario mediante comandos php, donde te pide que ingreses la edad para verificar si sos mayor de 21 o menor. Esta parte del codigoecho $_SERVER['PHP_SELF'] significa que el formulario se enviará a la misma página. Ademas, se utiliza el metodo post para no enviar el dato de la edad por medio de la url.

4)
En este codigo el primer echo lo unico que muestra es "El" ya que las variables $flor y $color no estan definidas. Pero en el segundo echo antes de esta linea se incluye el archivo datos.php y este estan definidas esta variables, ya que el include "pega el codigo de datos y seria como si estuviera encima del segundo echo", esto ya mostraria El clavel blanco.

5) ya esta explicado en los comentarios, en el contador.dat lo que hicimos fue unicamente escribir el numero 0, ya que en ese momento la pagina no tenia visitas. Cuando ingresamos en la pagina "vistas.php" actualiza el archivo .dat y le suma 1
