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