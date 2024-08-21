### Creamos un archivo index para visualizar los cambios, un css para visualizar los estilos de algunas etiquetas, y un readme para las respuestas.

##### Analizar  los  siguientes  segmentos  de  código  indicando  en  qué  sección  del  documento  HTML se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, eatiquetas, y tributos (nombre y valor), aclarando si es obligatorio. 

2a) 
<!-- Código controlado el día 12/08/2009-->
Esta linea es un comentario. Puede ir en cualquier parte del archivo controlado, pero este comentario en especifico podria ir al principio del archivo.
No producen ningun efecto ya que solo es un comentario. 
Los elementos para hacer un comentario son: <!-- -->. No hay diferencia si es para una linea o para un conjunto de estas.

2b)
<div id="bloque1">Contenido del bloque1</div> 
En esta linea, tenemos una etiqueta div. Se colocan dentro del body. Su funcion es dividir el body en distintos bloques de contenido o seccion de una pagina, utilizamos el id para diferenciarlos entre si, ya que cada id es unico. Dentro del div se coloca el contenido de dicho bloque, pueden ser una o multiples lineas. No es obligatoria en un documento HTML, pero es una etiqueta muy útil y utilizada para estructurar y organizar el contenido dentro del body.

2c)
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" /> 
Esta linea es para colocar una imagen a un archivo. Se coloca dentro del body. Sus elementos son:

- src: Indica la ruta a la imagen en caso de ser necesaria.
- alt: Es un breve comentario de la imagen, se emplea por ejemlpo si la imagen no carga se muestra este comentario.
- id: Como mencionamos anteriormente, se utiliza para individualizar cada imagen.
- name: Ya no se emplea en hmtl 5 para las imagenes, si no que se utiliza en formularios. Sin embargo, se utilizaba de forma similiar al id.
- width: Indican el ancho de la imagen.
- height: Indican el alto de la imagen.
- longdesc: Se utiliza para proporcionar una descripcion de la imagen pero mas extensa en comparacion con el elemento alt.
La etiqueta img no es obligatoria, ya que unicamente se utiliza cuando queremos insertar una imagen.

2d)
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " /> 
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" /> 
La etiqueta meta proporciona metadatos al documento, se ubica en el head. Sus elementos son:

- name: Indica que contiene la etiqueta meta, en este caso, contiene palabras claves.
- lang: Indica el lenguaje que se va a utilizar, en este caso, el lenguaje de las palabras claves es español.
- content: Es el contenido de la etiqueta, en este caso, el contenido de las palabras claves es " casa, compra, venta, alquiler".
- http-equiv: Indica la directiva que configura la etiqueta, en este caso, configura una directiva HTTP.
Es obligatoria ya que es necesaria para los motores de busqueda.

2e)
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" 
rel="help">Resumen HTML </a> 
Esta linea muestra una etiqueta 'a', la cual sirve para redireccionar al usuario hacia otro archivo o pagina haciendo uso de un hipervinculo. Se coloca dentro del body. 
Sus elementos son:

- href: Indica la URL del nuevo archivo o pagina.
- type: Indica el tipo de documento al que se dirige, en este caso HTML.
- hreflang: Indica el idioma de la URL del destino, en este caso, español.
- charset: Define los caracteres que se van a utilizar, en este caso, es para que se pueda utilizar elementos del diccionario español.
- rel: Define la relacion entre el documento actual y el del destino, en este caso, el documento destino brinda ayuda sobre el documento actual.
No es obligatoria, ya que unicamente se utiliza cuando queremos implementar un link que redireccione al usuario.

2f)
<table width="200" summary="Datos correspondientes al ejercicio vencido"> 
    <caption> Título </caption> 
    <tr> 
    <th scope="col">&nbsp;</th> 
    <th scope="col">A</th> 
    <th scope="col">B</th> 
    <th scope="col">C</th> 
    </tr> 
    <tr>
        <th scope="row">1º</th> 
        <td>&nbsp;</td> 
        <td>&nbsp;</td> 
        <td>&nbsp;</td> 
    </tr>
    <tr>
        <th scope="row">2º</th> 
        <td>&nbsp;</td> 
        <td>&nbsp;</td> 
        <td>&nbsp;</td>
    </tr>
</table>
Este conjunto de lineas representan una tabla, definida por su etiqueta table, y su estructura. Se coloca en el body. Los elementos de la tabla son: width, es el ancho de la tabla, y summary, es la descripcion de lo que muestra la tabla. La etiqueta caption se usa para darle un titulo a la tabla, dentro encontramos el atributo align que nos indica si el titulo esta centrado, alineado hacia la izquierda o derecha, justificado, etc. La etiqueta tr es para insertar las filas de la tabla, mientras que th es para insertar el encabezado de la tabla. Primero se colocan las filas y dentro se dividen las columnas. El elemento scope se utiliza para rellenar los valores de una celda, de una columna en este caso. La etiqueta td define el inicio y el fin de una celda, es decir una columna.
No es obligatoria, ya que unicamente se utilizan cuando queremos usar una tabla.


