### Creamos un archivo index para visualizar los cambios, un css para visualizar los estilos de algunas etiquetas, y un readme para las respuestas.

##### En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones:

3a)
<a href="http://www.google.com.ar">Click aquí para ir a Google</a> 
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a> 
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help"> 
<a href="#">Click aquí para ir a Google</a> 
<a href="#arriba">Click aquí para volver arriba</a>
<a name="arriba" id="arriba"></a>

La etiqueta 1 y 2, redireccionan al usuario a la pagina de google. La diferencia entre ellas es que la 1 abre la pagina en la misma ventana, mientras que la 2 la abre en una ventana nueva, esto se debe al elemento target.
La etiqueta 3, nomuestra una leyenda para dirigirse a google porque la etiqueta 'a' no esta cerrada, no contiene texto y en el href hay un espacio en el link.
La etiqueta 4, no direcciona ya que no tiene especificada una url, pero si tiene el texto.
La etiqueta 5, indica que el enlace debe llevar a un elemento con un atributo id='arriba'. Como este atributo no se encuntra en la pagina no hace nada
La etiiqueta 6, no muestra nada pq no hay texto VER

3b)
<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p> 
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p> 
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí</a></p> 
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a href="http://www.google.com.ar">Click aquí</a></p>

La etiqueta 1, muestra la imagen y si queres redireccionarte a google debes clickear en el texto.
La etiqueta 2, muestra la imagen y el texto pero en este caso, para redireccionarte debes hacer click en la imagen. Esto es por la disposicion de las etiquetas debido que la etiqueta imagen se encuntra dentro de la etiqueta 'a'.
La etiqueta 3, muestra la imagen y el texto pero en este caso, para redireccionarte podes hacer click en la imagen o en el texto indistintamente. Esto se debe a que la etiqueta de imagen y el texto estan dentro de la etiqueta 'a'.
La etiqueta 4, muestra la imagen, hace lo mismo que la etiqueta 3, pero a diferencia de la anterior, en esta hay dos etiquetas 'a', una para la etiqueta de la imagen y la otra para el texto.

3c)
<ul> 
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ul>

<ol>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ol>

<ol>
    <li>xxx</li>
</ol>
<ol>
    <li value="2">yyy</li>
</ol>
<ol>
    <li
    value="3">zzz</li>
</ol>

<blockquote>
    <p>1. xxx<br />
    2. yyy<br />
    3. zzz</p>
</blockquote>

El primer conjunto de lineas crea una lista de tres elementos sin orden, la etiqueta ul hace referencia a "unorder list", emplea una posicion de puntos.
El segundo conjunto de lineas crea una lista de tres elementos ordenada, la etiqueta ol hace referencia a "order list", emplea numeros para identificar posiciones.
El tercer conjunto de lineas crea tres listas ordenadas de un elemento cada una, para que no aparezca siempre un 1 al inicio utiliza el atributo value para cambiare el valor a la posicion.
Finalmente, el ultimo conjunto no es una lista, la etiqueta blockquote se utiliza para escribir una cita en un bloque. Su visualizacion es en forma de lista porque sus elementos estan escritos dentro de un parrafo y ordenados uno debajo de otro por medio de la etiqueta br.

3d)
<table border="1" width="300">
    <tr>
        <th>Columna 1</th>
        <th>Columna 2</th>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
    <br>
<table border="1" width="300">
    <tr>
        <td><div align="center"><strong>Columna1</strong></div></td>
        <td><div align="center"><strong>Columna 2</strong></div></td>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
Ambos codigos generan la misma tabla, la diferencia entre ellos es que el primero hace uso de la etiqueta th, la cual indica que esa celda es la cabecera de la tabla, dandole un formato diferente que el de las celdas de datos. Mientras que la segunda tabla no hace uso de la etiqueta th, por lo que debe darle un estilo diferente a las celdas cabeceras de la tabla de forma "manual", utilizando el atributo align y las etiquetas strong y div. Esto tambien hace que la segunda tabla haga el proceso mas lento.

3e)
<table width="200">
    <caption>Título</caption>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr> 
</table>
    <br>
<table width="200">
    <tr>
        <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
Ambos codios generan la misma tabla, la diferencia es que el primero usa la etiqueta caption, la cual le da el nombre a la tabla. Mientras que el otro codigo, no utiliza esta etiqueta, lo cual lo obliga a darle estilo al nombre de la tabla de forma "manual", utilizando atributos como colspan y align. 

3f)
<table width="200">
    <tr>
        <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
    <br>
<table width="200">
    <tr>
        <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
Ambos codios generan la misma tabla, la diferencia es que el primero por medio del atributo rowspan combina verticalmente dos celdas de la misma columna. Mientras que el segundo por medio del atributo colspan combina horizontalmente dos celdas de distintas columnas.

3g)
<table width="200" border="1">
    <tr>
        <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td colspan="2"rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
    <br>
<table width="200" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>   
Ambos codios generan la misma tabla, la diferencia es que el primero cada seccion esta separada por un margen que se generan entre si. En camnbio en el Segundo codigo con los elementos cellpadding y cellspacing hace que no haya espacios entre si

3h)
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
    <fieldset>
    <legend>LOGIN</legend>
    Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
    Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
    </fieldset>
    <input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
<br>
<form id="form2" name="form2" action="" method="get" target="_blank">
    LOGIN<br />
    <label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
    <label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
    <input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
<br>
<form id="form3" name="form3" action="mailto:xx@xx.com” enctype=text/plain method="post" target="_blank">
    <fieldset>
        <legend>LOGIN</legend>
        Usuario: <input type="text" id="usu3" name="usu3" /><br />
        Clave: <input type="password" id="clave3" name="clave3" />
    </fieldset>
    <input type="reset" id="boton3" name="boton3" value="Enviar" />
</form>


3i)
<label>Botón 1
    <button type="button" name="boton1" id="boton1">
    <img src="im1.jpg" alt="Botón con imagen " width="30" height="20" /><br />
    <b>CLICK AQUÍ</b></button></label>
    <br>
    <label>Botón 2
    <input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>


3j)
<p>
    <label><input type="radio" name="opcion" id="X" value="X" />X</label><br />
    <label><input type="radio" name="opcion" id="Y" value="Y" />Y</label>
</p>
    <br>
<p>
    <label><input type="radio" name="opcion1" id="X" value="X" />X</label><br />
    <label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label>
</p>


3k)
<select name="lista">
    <optgroup label="Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label="Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select>
    <br>
<select name="lista[]" multiple="multiple">
    <optgroup label=" Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label=" Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select>
