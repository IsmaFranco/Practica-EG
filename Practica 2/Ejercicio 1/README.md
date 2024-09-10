# Cuestionario

1. ¿Qué es CSS y para qué se usa?
    CSS son las siglas de Cascade Style Sheet que traducido significa hojas de estilo en cascada. Las hojas de estilo es una tecnología que nos permite controlar la apariencia de una página web. En un principio, los sitios web se concentraban más en su contenido que en su presentación. 
    CSS describe como los elementos dispuestos en la página son presentados al usuario, es un gran avance que complementa el HTML y la Web en general. 
    Con CSS podemos especificar estilos como el tamaño, fuentes, color, espaciado entre textos y recuadros así como el lugar donde disponer texto e imágenes en la página. 

2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan? 
    Las hojas de estilo están compuestas por una o más de esas reglas aplicadas a un documento HTML o XML. La regla tiene dos partes: un selector y la declaración. A su vez la declaración está compuesta por una propiedad y el valor que se le asigne.  
    El selector funciona como enlace entre el documento y el estilo, especificando los elementos que se van a ver afectados por esa declaración.   
    La declaración es la parte de la regla que establece cuál será el efecto. 

3. ¿Cuáles son las tres formas de dar estilo a un documento? 
    Tres formas de dar estilo a un documento:
    1. Usando una hoja de estilo externa que estará vinculada a un documento a través del elemento <link>, el cual va situado en la sección <head>.
    2. Utilizando el elemento <style>, en el interior del documento al que se le quiere dar estilo, y que generalmente se situa en la sección <head>. De esta forma los estilos serán reconocidos antes de que la página se cargue por completo.
    3. Empleando estilos directamente sobre aquellos elementos que lo permiten a través del atributo <style> dentro de <body>. Pero este tipo de estilo pierde las ventajas que ofrecen las hojas de estilo al mezclarse el contenido con la presentación.

4. ¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno. 
    Los tipos de selectores más utilizados son:
    1. Selector de elementos: selecciona la etiqueta y le da un estilo, por ejemplo: h2{color: gray}
    2. Selector universal: es el * selecciona todos los elementos del HTML
    3. Selector de clase: selecciona la clase de cualquier etiqueta con el mismo nombre, por ejemplo: h2 class= "con", h1 class="con", .con{background-color: black} le asigana el mismo back-ground a dos etiquietas distintas
    4. Selector Id: es lo exactamente igual que el de clase pero con la diferencia que este es unico para cada etiqueta y su representacion en css es: #id {color: black}
    5. Selectores descendientes: sirve para ser mas especificos a la hora de dar los estilos, se separan mediante espacio en la declaracion de su css, por ejemplo tenemos un h1 que dentro tiene una etiqueta i, si queremos ser especificos para darle un estilo a la etiqueta i habria que declararlo de la siguiente manera: h1 i {color: gray}, esto se aplica solo para la etiqueta i

5. ¿Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?
    Una pseudo-clase es una palabra clave añadida a un selector que especifica un estado especial del elemento seleccionado. Las pseudo-clases más utilizadas aplicadas a vínculos son:

    1. :link - Selecciona un enlace que no ha sido visitado.
    2. :visited - Selecciona un enlace que ha sido visitado.
    3. :hover - Selecciona un enlace cuando el usuario coloca el cursor sobre él.
    4. :active - Selecciona un enlace en el momento en que es activado (por ejemplo, cuando se hace clic en él).

6. ¿Qué es la herencia? 
    La herencia en CSS se refiere a cómo algunas propiedades de estilo se transmiten de un elemento padre a sus elementos hijos. No todas las propiedades CSS son heredadas automáticamente, pero muchas propiedades relacionadas con el texto y la fuente sí lo son.

7. ¿En qué consiste el proceso denominado cascada?
    El proceso denominado "cascada" en CSS se refiere a cómo los estilos se aplican a los elementos HTML en función de la especificidad, el origen de los estilos y el orden en que se encuentran. La cascada determina qué reglas de estilo se aplican cuando hay múltiples reglas que podrían aplicarse a un mismo elemento.