Ejercitación  2 
HTML está compuesto por un conjunto de elementos que son la base de su estructura. Los elementos 
están compuestos por dos tags (el de apertura y el de cierre) y el contenido 
en el medio (con excepción de los elementos vacíos ). Cada  tag  puede  tener atributos 
(proporcionan  ciertas  características  como  altura,  ancho, color, etc.) y eventos (asocian un script 
que se ejecuta cuando el evento ocurre). 
Analizar  los  siguientes  segmentos  de  código  indicando  en  qué  sección  del  documento  HTML  
se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos 
(nombre y valor), aclarando si es obligatorio. 
2.a) 
<!-- Código controlado el día 12/08/2009 → 
Análisis: Es un comentario 
Sección: Se coloca en cualquier sección
Efecto: Su efecto es informativo para el programador y no se visualiza en el navegador
Elementos: 
<!-- --> etiqueta comentario
No tiene atributos y no es obligatorio

2.b)  
<div id="bloque1">Contenido del bloque1</div> 
Análisis: Elemento de bloque. 
Sección: Se coloca en el body
Efecto: Crea un bloque contenedor que agrupa un contenido
Elementos:
<div> etiqueta de apertura
</div> etiqueta de cierre
Atributos:
id = "bloque" 

2.c)  
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" 
longdesc="detalles.htm" /> 
Análisis:Elemento para imágenes.
Sección: Se coloca en el body
Efecto: Muestra una imagen
Elementos:
<img/> etiqueta imagen no tiene cierre
Atributos:
src = "" es la ruta de la imagen, es obligatorio
alt = "lugar imagen"  es el texto alternativo 
id = "im1" es un identificador, es opcional
name"im1" es un nombre, es opcional
width="32" es el ancho de la imagen, es opcional 
height="32" es el alto de la imagen, es opcional
longdesc="detalles.htm" es una descripcion, opcional

2.d) 
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " /> 
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" /> 
Efecto: Son los metadatos del html, no producen un efecto visual directo.
Sección: Se colocan exclusivamente en el head
Elementos:
<meta/> etiqueta sin cierre
Atributos:
name="keywords" es el tipo de informacion
lang="es" es el idioma
content="..." contenido, es obligatorio
http-equiv="expires" es el comportamiento http

2.e) 
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" 
rel="help">Resumen HTML </a> 
Efecto: crea un enlace 
Seccion: body
Elementos:
<a> etiqueta de apertura
</a> etiqueta de cierre
Atributos:
href="..." es el destino, es obligatorio
type es el tipo de contenido, es opcional
hreflang es el idioma, es opcional
charset es la codificacion que usa HTML
rel= "help" 


2.f) 
<table width="200" summary="Datos correspondientes al ejercicio vencido"> 
<caption align="top"> Título </caption> 
<tr> 
<th scope="col">&nbsp;</th> 
<th scope="col">A</th> 
<th scope="col">B</th> 
<th scope="col">C</th> 
</tr> 
<tr> 
</tr> 
<tr> 
</tr> 
</table> 
Efecto: Crea una tabla
Sección: body
Elementos:
<table> tabla
<caption> titulo de la tabla
<tr> fila 
<th> encabezado
Atributos:
width es el ancho, es opcional
summary es una descripcion, es opcional
align es su posicion, es opcional
scope 
&nbsp espacio en blanco 

Ejercitación 3
En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones:

3.a) <a href="http://www.google.com.ar">Click aquí para ir a Google</a> Abre el enlace en la misma pestaña
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a> Con el tarjet="blanck" abre el enlace en otra pestaña
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">  No muestra nada 
<a href="#">Click aquí para ir a Google</a> el enlace te envia al inicio de la pagina
<a href="#arriba">Click aquí para volver arriba</a> crea un enlace buscando en la misma pagina un elemento que tenga un id con el nombre "arriba"
 <a name="arriba" id="arriba"></a>  es el destino del anterior

3.b) <p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p> 
Tenemos por un lado la imagen y por el otro el enlace a google

<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p> 
Enlace en la imagen

<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="ima gen1" />Click aquí</a></p> 
Enlace en la imagen y el texto

<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a href="http://www.google.com.ar">Click aquí</a></p>
Enlace en la imagen y el texto 

3.c) <ul> 
<li>xxx</li> 
<li>yyy</li> 
<li>zzz</li> 
</ul> 
lista normal, con circulitos

<ol> 
<li>xxx</li> 
<li>yyy</li> 
<li>zzz</li> 
</ol> 
Lista ordenada

<ol> 
<li>xxx</li> 
</ol> 
<ol> 
<li value="2">yyy</li> 
</ol> 
<ol> 
<li value="3">zzz</li> 
</ol> 
lista ordenada, value la da el numero

<blockquote> 
<p>1. xxx<br /> 
2. yyy<br /> 
3. zzz</p> 
</blockquote>
no es una lista, sino que lo escribe el programador

3.d) <table border="1" width="300"> 
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
Tabla normal 

<table border="1" width="300"> 
<tr> 
<td><div align="center"><strong>Colum na1</strong></div></td> 
<td><div align="center"><strong>Columna 2</strong></div></td> 
</tr> 
<tr> <td>Celda 1</td> 
<td>Celda 2</td> 
</tr> 
<tr> 
<td>Celda 3</td> 
<td>Celda 4</td> 
</tr> 
</table>
Igual a la anterior visualmente pero estructurado distinto 

3.e) <table width="200"> 
<caption>Titulo </caption> 
<tr> 
<td bgcolor="#dddddd">&nbsp;</td> 
<td bgcolor="#dddddd">&nbsp;</td> 
<td bgcolor="#dddddd">&nbsp;</td> 
</tr> 
<tr> 
<td bgcolor="#dddddd">&nbsp;</td> 
<td bgcolor="#dddddd"> &nbsp;</td> 
<td bgcolor="#dddddd">&nbsp;</td> 
</tr> 
</table> 
<table width="200"> 
<tr> 
<td colspan="3">
<div align="center">Título</div></td> 
</tr> 
<tr> 
<td bgcolor="#dddddd">&nbsp;</td> 
<td bgcolor="#dddddd">&nbsp;</td> 
<td bgcolor="#dddddd">&nbsp;</td> 
</tr> 
<tr> <td bgcolor="#dddddd">&nbsp;</td> 
<td bgcolor="#dddddd">&nbsp;</td> 
<td bgcolor="#dddddd">&nbsp;</td> 
</tr> 
</table>
no se :(

3.f) <table width="200"> <tr> <td colspan="3"><div align="center">Título</div></td> </tr> <tr> <td rowspan="2" bgcolor="#dddddd">&nbsp;</td> <td bgcolor="#dddddd">&nbsp;</td> <td bgcolor="#dddddd">&nbsp;</td> </tr> <tr> <td bgcolor="#dddddd">&nbsp;</td> <td bgcolor="#dddddd">&nbsp;</td> </tr> </table> <table width="200"> <tr> <td colspan="3"><div align="center">Título</div></td> </tr> <tr> <td colspan="2" bgcolor="#dddddd">&nbsp;</td> <td bgcolor="#dddddd">&nbsp;</td> </tr> <tr> <td bgcolor="#dddddd">&nbsp;</td> <td bgcolor="#dddddd">&nbsp;</td> <td bgcolor="#dddddd">&nbsp;</td> </tr> </table>
La primer tabla se unen las columnas, en la segunda se unen las filas

3.g) <table width="200" border="1"> <tr> <td colspan="3"><div align="center">Título</div></td> </tr> <tr> <td colspan="2"rowspan="2">&nbsp;</td> <td>&nbsp;</td> </tr> <tr> <td width="50%">&nbsp;</td> </tr> </table> <table width="200" border="1" cellpadding="0" cellspacing="0"> <tr> <td colspan="2"><div align="center">Título</div></td> </tr> <tr> <td rowspan="2">&nbsp;</td> <td>&nbsp;</td> </tr> <tr> <td width="50%">&nbsp;</td> </tr> </table>
Tabla con espacios entre las celdas

3.h) <form id="form1" name="form1" action="procesar.php" method="post" target="_blank"> 
<fieldset> 
<legend>LOGIN</legend> 
Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br /> 
Clave: <input type="password" id="clave1" name="clave1" value="xxx" /> 
</fieldset> 
<input type="submit" id="boton1" name="boton1" value="Enviar" /> 
</form> 
formulario encuadrado, con el value xxx en usuario y contraseña. 

<form id="form2" name="form2" action="" method="get" target="_blank"> 
LOGIN<br /> 
<label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br /> 
<label>Clave: <input type="text" id="clave2" name="clave2" /></label><br /> 
<input type="submit" id="boton2" name="boton2" value="Enviar" /> </form> 
formulario basico

<form id="form3" name="form3" action="mailto:xx@xx.com” enctype=text/plain method="p ost" target="_blank"> <fieldset> <legend>LOGIN</legend> Usuario: <input type="text" id="usu3" name="usu3" /><br /> Clave: <input type="password" id="clave3" name="clave3" /> </fieldset> <input type="reset" id="boton3" name="boton3" value= "Enviar" /> </form>
similar al primero pero sin los value y envia por email el formulario


3.i) <label>Botón 1 <button type="button" name="boton1" id="boton1"> <img src="logo.jpg" alt="Botón con imagen " width="30" height="20" /><br /> <b>CLICK AQUÍ</b></button></label> <label>Botón 2 <input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" /> </label>
boton en la imagen y boton en el texto

3.j) <p><label><input type="radio" name="opcion" id="X" value="X" />X</label><br /> <label><input type="radio" name="opcion" id="Y" value="Y" />Y</label></p> <p><label><input type="radio" name="opcion1" id="X" value="X" />X</label><br /> <label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label></p>
Son radio buttons 

3.k) <select name="lista"> <optgroup label="Caso 1"> <option>Mayo</option> <option>Junio</option> </optgroup> <optgroup label="Caso 2"> <option>Mayo</option> <option>Junio</option> </optgroup> </select> <select name="lista[]" multiple="multiple"> <optgroup label=" Caso 1"> <option>Mayo</option> <option>Junio</option> </optgroup> <optgroup label=" Caso 2"> <option>Mayo</option> <option>Junio</option> </optgroup> </select>
Son dos maneras de realizar seleccion. Unica y multiple