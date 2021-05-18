## Como usar HTACCESS en Apache, trucos y ejemplos prácticos

* *https://norfipc.com/codigos/como-usar-htaccess-apache-trucos-ejemplos-practicos.php*

## Cómo conseguir URL amigables con la modificación del archivo .htaccess

* *https://www.arsys.es/blog/soluciones/configuracion-de-programas/url-amigables-htaccess/*


```
Para comenzar debemos indicar que se ponga en marcha el motor de reescritura de URL con esta línea:

RewriteEngine on

Luego tenemos que generar las redirecciones con la instrucción RewriteRule, indicando primero el patrón de la URL amigable y la redirección que se debe producir. Dicho patrón se debe colocar como una expresión regular y a continuación colocamos la URL a la que se debe redirigir la solicitud.

RewriteRule ^productos/([a-zA-Z]+)/([a-zA-Z]+)$ tienda.php?productos=$1&categoria=$2

Para explicar esta regla, la vamos a descomponer:

«^» es el inicio de una expresión regular para definir el patrón de URL amigable
«productos/» es una serie de caracteres que figurarán en toda URL que se desee redirigir.
«([a-zA-Z]+)» eso es una expresión regular que dice que habrá una o más repeticiones de letras, minúsculas o mayúsculas
«/» hay un separador de barra entre las dos repeticiones
«([a-zA-Z]+)» vuelve a figurar el patrón de repeticiones de letras.
«$» es el final del patrón.
A partir de ahí encontramos la URL a la que redirigimos la solicitud. Que estará en el archivo tienda.php, enviándole como parámetros «productos» y «categoria». $1 corresponde con el primer patrón «([a-zA-Z]+)» y $2 con el segundo, tal como están indicados en la expresión regular.

```

### Este sería otro ejemplo completo de modificación del archivo .htaccess que puede ayudarnos a crear URL amigables para distintos productos:

```

Buscar en el blog
 Buscar en el blog 
Inicio / Soluciones / Configuración de programas / Cómo conseguir URL amigables con la modificación del archivo .htaccess

Cómo conseguir URL amigables con la modificación del archivo .htaccess
Publicado el 01/09/2015 por Jose Mª Baquero García en Configuración de programas , Hosting , Programación y BBDD Compartir: Email Facebook LinkedIn Twitter
El archivo .htaccess es un archivo de configuración de Apache, el más popular de los servidores web, que se encuentra en la mayoría de los espacios de alojamiento. De modo general, ese archivo es capaz de alterar la configuración del servidor web, aplicando esos cambios al directorio donde el .htaccess esté situado y todos los directorios que dependen de él. En la práctica, este fichero se usa para muchas cosas como, por ejemplo, proteger una carpeta por clave, activar la compresión de los ficheros que se transfieren, etc. En este artículo profundizamos en uno de los mejores usos que le podemos destinar: la creación de URL amigables.


Tabla de contenidos
1 Tenemos el Hosting que necesitas
2 Cómo crear URL amigables
TENEMOS EL HOSTING QUE NECESITAS
Con la última tecnología, un dominio gratis y transferencia ilimitada.desde 3 €/mesCONTRÁTALO
Las URL amigables son básicamente direcciones de páginas que son más fáciles de escribir, recordar y sobre todo, que Google interpreta de con mayor relevancia. Por ejemplo, podríamos tener una URL como: example.com/tienda.php?productos=zapatillas&categoria=playa, pero es una URL poco atractiva para buscadores y usuarios, aparte que muestra nuestra programación. Sería mucho mejor una URL como esta: example.com/productos/zapatillas/playa.

Es una dirección más concisa, fácil de escribir y que se centra en lo que realmente importa, sin mostrar el contenido de las variables que se usan a nivel de programación.

Cómo crear URL amigables
Esta tarea básicamente se trata de configurar un sistema de redirecciones para que, de la URL amigable, internamente y de manera transparente para el usuario, se transfiera la solicitud a la página real que la va a servir. Es decir: es como una traducción de la URL amigable a la URL no amigable.

Lo haremos, como decíamos, gracias al archivo .htaccess. Primero tenemos que crear ese archivo y guardarlo generalmente en la carpeta raíz del dominio. El .htaccess es un archivo de texto plano, que tendremos que editar.

Para comenzar debemos indicar que se ponga en marcha el motor de reescritura de URL con esta línea:

RewriteEngine on
Luego tenemos que generar las redirecciones con la instrucción RewriteRule, indicando primero el patrón de la URL amigable y la redirección que se debe producir. Dicho patrón se debe colocar como una expresión regular y a continuación colocamos la URL a la que se debe redirigir la solicitud.

RewriteRule ^productos/([a-zA-Z]+)/([a-zA-Z]+)$ tienda.php?productos=$1&categoria=$2
Para explicar esta regla, la vamos a descomponer:

«^» es el inicio de una expresión regular para definir el patrón de URL amigable
«productos/» es una serie de caracteres que figurarán en toda URL que se desee redirigir.
«([a-zA-Z]+)» eso es una expresión regular que dice que habrá una o más repeticiones de letras, minúsculas o mayúsculas
«/» hay un separador de barra entre las dos repeticiones
«([a-zA-Z]+)» vuelve a figurar el patrón de repeticiones de letras.
«$» es el final del patrón.
A partir de ahí encontramos la URL a la que redirigimos la solicitud. Que estará en el archivo tienda.php, enviándole como parámetros «productos» y «categoria». $1 corresponde con el primer patrón «([a-zA-Z]+)» y $2 con el segundo, tal como están indicados en la expresión regular.

Este sería otro ejemplo completo de modificación del archivo .htaccess que puede ayudarnos a crear URL amigables para distintos productos:

# Activar RewriteEngine
RewriteEngine on

RewriteCond %{SERVER_PORT} 80

RewriteBase /

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}.php -f

#   Reescribir la URL solicitada por el usuario

#   Home
RewriteRule ^inicio$ /index.php [L]

#   Producto
#   Entrada: producto/NOMBRE_PRODUCTO/
#   Salida: productos.php?id=NOMBRE_PRODUCTO
RewriteRule ^producto/(.*)$  /productos.php?id=$1 [L]

```

## Crear una aplicación CRUD con PHP usando Programación Orientada a Objetos

* *https://obedalvarado.pw/blog/crear-una-aplicacion-crud-con-php-usando-programacion-orientada-a-objetos/*


## Url Amigable

```

http://localhost:80/developer/apis/03-api-rest-php/v1/productos/4

```

## Database config

```

database: productos
table: articulos

```


## Error Ionic

```
Este error se produce cuando se envia mensajes de prueba por ejemplo
un echo "Connected successfully"; se debe eliminar dichos sms para que funcione

error: {error: SyntaxError: Unexpected token C in JSON at position 0 at JSON.parse (<anonymous>) at XMLHtt…, text: "Connected successfully[{"codigo":"1","descripcion"…ripcion":"description AAAA3","precio":"3011120"}]"}
headers: HttpHeaders {normalizedNames: Map(0), lazyUpdate: null, lazyInit: ƒ}
message: "Http failure during parsing for http://localhost/developer/apis/04-api-rest-php/v1/productos"
name: "HttpErrorResponse"
ok: false
status: 200
statusText: "OK"
url: "http://localhost/developer/apis/04-api-rest-php/v1/productos"
__proto__: HttpResponseBase

```