# CRUD_ESCUELA
Implementación de un patrón de diseño arquitectónico de software por capas.

Muestra una aplicación web interpretada en un servidor local, desarrollada en capas y codificada en lenguaje php.

# SOFTWARE DE APOYO

+ XAMPP
+ VISUAL STUDIO CODE

Instalación XAMP
Instalación y configuración del software para desarrollo de aplicaciones web XAMPP.





![2020-10-26 (1)](https://github.com/user-attachments/assets/bcd80f29-2679-4c17-afff-0e800f15c650)



El Diagrama 2, mustra la ruta lógica de instalación local del proyecto: https://github.com/miRepositorioGit/tresCapasPhp/archive/refs/heads/main.zip

tresCapasPhp
├── credenciales.php
└── index.php
	├─modelo
	├─controlador
	└─vista
Diagrama 1. Estructura monolítica.

Desarrollo.
Muestra una aplicación web desarrollada por capas contenidas monolíticamente y codificada en Php con distintas responsabilidades y fuertemente acopladas. Una estructura de código monolítca, es una práctica recurrente en aplicaciones básicas y, o sencillas, como se muestra en el Diagrama 1.

Tiene las siguientes prácticas de desarrollo de software:

1. La aplicación es construida en sus elementos con la misma tecnología de lenguaje.
2. La aplicación principal es autosuficiente, contiene y comparte los componentes de: memoria, recursos y códigos distribuidos en clases y, o archivos en una unidad cohesiva de código.
3. Su ámbito de utilidad son escenarios donde existe un sistema informático autónomo. Es decir, no existe una dependencia con servicios externos, para ejecutar su tarea principal; por ejemplo, una computadora embebida para soporte de respiración asistida, un sistema de inyección electrónico de combustible en un vehículo. Es suma, su ámbito de operación es por sí mismo y no depende de nadie al ejecutar su tarea.
4. NO es apropiado para aplicaciones medianas a grandes, donde conviven otras tecnológias de software.
5. NO se recomienda que una misma tecnología de código, renderize la interfaz de usuario.
6. NO cumple con el principio de responsabilidad única 1.
7. El método divide y venceras es difícil de aplicar, dado el nivel de acoplamiento y amplitud del proyecto 2.
capasModeloVistaControlador
Figura 1. Capas en aplicación web.

Se muestra que en la parte superior de la Figura 1, existe una petición de un recurso electrónico, integrada por un tercia de elementos constructivos de un direción web. Así también, se presenta la iteración entre objetos_Interfaz (conn, result, row[]), interactuando solicitudes request de datos entre las capas de: vista↔controlador↔modelo. Caracterizado en la Tabla 1.

objetos_Interfaz	Caracterización
conn	Es un objeto del tipo mysql. Vincula una conexión al servidor MySQL.
result	Retorna un arreglo asociativo de registros de una base de datos.
row[]	Es un deserealizador de objetos.
Tabla 1. Objetos tipo request.


