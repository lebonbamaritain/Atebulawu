




										##################
 										#				 #
 										#	 Spanish     #
 										#				 #
 										##################




Nombre del componente : ATEBULAWU

Lenguaje de fabricacion : PHP

Categoria : componente de uso

Fecha de creacion : 02 - 2025

Autor : Mathieu Kabo Junior

Version : 0.0.7

Detaille : 

Este es un componente de usuario que le permitirá llevar a cabo las siguientes operaciones : 

1 - puede usar este componente para cargar clases contenidas en espacios de nombres de manera dinámica. Simplemente proporcione 2 parámetros a la clase Autoloader. El primer parámetro que se proporciona a la clase Autoloader es la ruta absoluta del repertorio del host de sus espacios de nombres. NB: Si usa una ruta relativa, el sistema de carga automática del aula no podrá cargar sus clases. En el segundo parámetro, debe proporcionar a la clase AutoRoader el código 111. Este código comienza el sistema de carga automática para sus clases. Si desea probar la primera operación realizada no cuenta con el componente, decomplementa el ejemplo 1 en el archivo index.

2 - el código 111 también le permite iniciar un sistema de carga de clase, excepto que esta vez las clases no están en espacios de nombres . Es un sistema que me uso para organizar mejor mis clases. He considerado útil compartir esta organización con el resto de los desarrolladores web. ¿Cómo continúo? Comienzo poniendo mis clases primero por categoría. Por ejemplo, almaceno todas mis clases que contienen mi sistema de seguridad en un archivo que llamo class_security. Luego hago lo mismo para todo el resto del sistema.
Luego, no debemos olvidar la parte que mencionaré anteriormente, es esencial para el funcionamiento adecuado del sistema de carga automática para sus clases. Para que el sistema cargue efectivamente sus clases, debe agregar una segunda extensión a los nombres de sus clases. Ejemplo: [Security.seecure.php] ¿Para qué sirve? Respuesta: La segunda extensión agregada a los nombres de sus clases permitirá que el componente [Atebulawu] solo cargue las clases que necesita en parte de sus fuentes. Otra aclaración, debe asegurarse de que el nombre de su segunda extensión tenga un número diferente de caracteres de las otras partes de su sitio. Tomo un ejemplo: si la segunda extensión de todas las clases que contienen mi sistema de seguridad es (CTRL), debo asegurarme de que la segunda extensión de las clases que contengan mi sistema de boletín de boletín tenga un mayor número de caracteres o inferiores a 4. ¿Por qué es tan importante? Si la segunda extensión es la misma en todos los nombres de las clases de su sitio web, cuando utiliza el sistema de carga automática de sus clases en parte de su código fuente, el sistema cargará todas sus clases, incluidas las clases, incluidas las clases que no necesidad en una parte específica de su programa. Este es el objetivo de seleccionar solo las clases que necesita. Este componente ha sido preconfigurado para realizar esta tarea. También tiene en cuenta las dependencias cuando carga automáticamente varias clases en la memoria del sistema. NB: Cuando una o más de sus clases usan otras clases para funcionar correctamente, se recomienda organizar sus archivos para que el sistema de carga automática de aula pueda cargar las dependencias primero antes de cargar todas las clases que usan dependencias para funcionar correctamente; De lo contrario, el sistema podrá devolver un error si las dependencias se cargan después. Especifiqué varios ejemplos teniendo en cuenta la herencia en PHP. Haga pruebas para comprender mejor cómo funciona el componente. Para hacer esto, desmontaje el ejemplo 2. 

3 - el componente también le permite recuperar un archivo específico en un directorio de su sitio sin mencionar o la ruta [absoluto | Relativo] del archivo, ni el nombre del archivo en sí. Esto puede ser útil al manejar archivos confidenciales o incluso archivos de configuración. Si desea probar el componente, deciones el ejemplo 3. 


4 - Finalmente, la última operación se tiene en cuenta por el componente. El componente le permite este tiempo recuperar varios archivos de sus extensiones. Preconfiguré un conjunto de extensión compatible con el sistema. Puede modificar la tabla de la clase Usof_Ban_Djamumodien. Para probar la última operación que el componente tiene en cuenta, decomise el ejemplo 4. NB: Cuando desee usar este componente para recuperar uno o más archivos de sus extensiones en su (s) proyecto (s) o en su sitio, deberá deber Efectar una actualización del método que realiza la operación. 1 - Vaya a la clase abstracta Usof_Ban_Djamumodien 2 - Encuentre el método llamado utebulom_wanimagne 3 - Reemplace Basename ($ archivo) por $ archivo. 


Puede integrarlo en sus proyectos actuales o futuros, en su sitio web y donde necesite cargar automáticamente una o más clases o recuperar uno o más archivos. Uso: recupere la carpeta del sistema y la carpeta ReadMe y también el archivo init.php. Para el resto, haga lo que en los ejemplos mencionados en el archivo index.php. A tus teclados el geek!


