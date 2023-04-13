------------------------BIBLIOTECA STEPPENWOLF-----------------------
-Esta pagina esta creada como base de datos de una biblioteca, como herramienta para el/la bibliotecario/a, 
en la cual se agregan, modifican, o eliminan libros de la base de datos.

-La idea surgio por parte de un proyecto Front-End para una biblioteca virtual personal, 
el cual se encuentra aun en desarrollo ligado al programa Argentina Programa 4.0, en el cual, 
ademas de tener la presentacion de la biblioteca, tuviera su parte de administracion de una base de datos personal. 
A futuro la idea es poder subir Files en PDF y realizar el Full Responsive por parte del Front.

-Esta creada con HTML5, CSS3, Javascript, SQL, MySQL y PHP nativo en MVC.

El index.php llama al controlador "plantilla_controlador" el cual lleva a las diferentes rutas de la web si el usuario se encuenta logueado.
En la seccion "Login" solo se puede loguear con Usuario:admin Clave:admin, 
la cual llevara directo a la base de datos actual iniciando el SESSION.
En la Seccion "Agregar Libros" se agregan los libros a base de datos por Nombre, Autor/a y Año de publicacion.
En la Seccion "Biblioteca" se encuentras los libros de la base de datos, los cuales pueden ser modificados, o eliminados.
Por ultimo, en la seccion 'Cerrar Sesion" se cierra la SESSION iniciada en "Login" y lleva de nuevo a esta ultima pagina para volver a loguearse.

Esta web es parte del proyecto "Experto universitario con conocimientos en PHP y MySQL" de la UTN.
-------------------Creado por Jonathan Ezequiel Ordoñez-----------------