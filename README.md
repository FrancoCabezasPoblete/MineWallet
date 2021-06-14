# MineWallet

Página web para *INF239: Base de datos*

Equipo:

**Angelo Miranda** ROL: *201973126-2*

**Franco Cabezas** ROL: *201973082-7*

**Paulina Vega**   ROL: *201973052-5*

------------------

## Supuestos y consideraciones:

- Solo los administradores pueden crear más administradores. Un usuario no puede volverse administrador por si mismo.
- Para añadir criptomonedas a los usuarios se usaran consultas directamente sobre la base de datos o mediante programas externos, no por medio de esta página web. 
- Para cada cuenta existe un único email.
- Un administrador no puede eliminar a otro administrador, solo a usuarios.
- Un administrador no puede ver el perfil de otro administrador. 
- Cuando un administrador o usuario quiere actualizar los datos, los datos que quiere conservar los tendra que reescribir en la interfaz. 

## Archivos adicionales:

- Se adjuntaron imagenes svg/png para aumentar la estetica y fueron adjuntadas en diversos lugares de la página.

## Manejo del modelo:

- Para permitir el manejo de cuentas se le añadio una columna llamada admin de tipo booleana a la base de datos, permitiendo diferenciar entre usuarios (false) y administradores (true), al estar en una misma tabla permite consultas mucho más rapidas, con el costo de mantener en dejar en la tabla la dependencia transitiva del atributo admin. 

- El manejo de contraseñas se hizo a través de encriptado, y para una mayor versatilidad se modifico el limite maximo de caracteres posibles en la contraseña a 225.

- Además se actualizo el campo **id** de la tabla usuarios para que fuera auto-incremental.

- Al ya tener diferenciada la interfaz entre administrador y usuario, ahora se implementarán las respectivas funcionalidades en cada uno. 
Respecto del administrador se verifica el correcto funcionamiento de “Perfil”, “Usuarios” y “Sign out” en donde cada botón tendrá la funcionalidad de redirigir a su página respectiva.

- En cuanto a perfil se tiene que mediante los datos ingresados en Sign up y guardados en la base de datos mediante el uso de INSERT tendremos la disposición de estos para mostrarlo en esta parte de perfil mediante el uso de columnas y con SELECT que mostrara dichos valores ya guardados en la base de datos.

- En cuanto a usuarios se tiene la interfaz la que consiste en mostrar el all.html que contendrá a todos los usuarios mostrados mediante el uso de las columnas y todos los datos fueron guardados anteriormente en la base de datos mediante el uso de sing up con el uso de INSERT.

Dentro de la anterior contiene a “nuevo”, ”ver”, ”editar”, ”borrar”.

- Nuevo tiene la función INSERT y que contendrá todos los datos en la base de datos y todo esto será posible ya que al tocar dicho botón nos llevará a una interfaz de registro que usará lo anteriormente mencionado.

- Ver tiene la función SELECT la que mostrara todos los valores ingresados en la base de datos mediante la consulta, la cual nos llevara a una interfaz que visualizara al usuario pedido

- Editar tiene la función UPDATE la que actualizara los datos mediante una interfaz en la que se pedirá que datos se quieren cambiar (los que no se quieren cambiar, se reescriben) y luego se tendrá que apretar el botón para guardar los cambios, lo que modificara el registro en la base de datos. 

- Borrar tiene la función DELETE la que borrara todo lo relacionado con el id que se quiere borrar.

 


## Archivos plantilla modificados:

- create.html: Sufrio una modificación de funcionalidad, se le añadio la opción de que la cuenta creada pudiera ser admin o no mediante un formulario de grupos (de Bootstrap).
- styles.css: Sufrio variadas modificaciones para hacer mucho más estetica gran parte de la página.

## Dificultades:

- La instalación y correcto funcionamiento de los programas en conjunto fue un bache en cuanto al tiempo utilizado.

## Estimación de tiempo:

||Análisis del Enunciado|Modificaciones y ajustes al Modelo|Diseño de plataform| Desarrollo de Plataforma|Pruebas Finales|
--- | :---: | :---: | :---: | :---: | :---:
|**Angelo Miranda**|1 [hr]|4 [hr]  |1 [hr]|4 [hr]  |3 [hr] |
|**Franco Cabezas**|1 [hr]|6.5 [hr]|2 [hr]|6.5 [hr]|2 [hr] |
|**Paulina Vega**  |1 [hr]|3.5[hr] |9 [hr]|4 [hr]  |2 [hr] |
