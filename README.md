# slugerV2
Acortador de URLs de la Universidad de Granada (Versión actualizada a PHP 8.3.8)

sluger es una aplicación de la Oficina de Software Libre (http://osl.ugr.es/) de la Universidad de Granada (http://www.ugr.es/) que permite crear atajos con URLs cortas y redireccionar al usuario a través de ellas (similar a servicios como tinyurl o ATAJA).

Este software está actualmente en uso en http://sl.ugr.es

Su nombre iba a ser "SLUGR" (Short Link UGR) pero, por una errata, se acabó llamando "sluger".

Originalmente, este proyecto se hospedaba en la forja de RedIris en https://forja.rediris.es/plugins/scmsvn/viewcvs.php/sluger/?root=osl-ugr

La versión original se encuentra alojada en https://github.com/psicobyte/sluger

##Requisitos:

Apache con mod_rewrite habilitado. PHP MySQL

Usamos phpqrcode (Una librería de qrs con licencia LGPL) con la versión del código fuente alojada en https://sourceforge.net/projects/phpqrcode/files/latest/download (versión 1.1.4)

##Instalación:

Crear la Base de Datos "sluger".

Crear las tablas en la base de datos usando el script SQL "DataBase.sql".

Crear un usuario con permisos de lectura/escritura en esa BD.

Copiar al directorio raiz del dominio que va a usarse los archivos index.php (antiguamente sluger.php), modelo_htacces y, opcionalmente, el directorio templates conteniendo las plantillas, ayuda, hoja de estilo e imágenes.

Renombrar o copiar el archivo "modelo_htacces" a ".htacces".

Editar, en la función Init() del archivo index.php, los datos de usuario y contraseña para la conexión a la BD.

##BlackList y WhiteList

sluger permite usar dos archivos, blacklist.txt y whitelist.txt, como lista negra y lista blanca respectivamente.

Si existe whitelist.txt, se aplicará como lista blanca. Esto quiere decir que la IP del usuario debe coincidir con un patrón en ese fichero para que se le permita crar una URL corta.

Si existe blacklist.txt, se aplicará como lista negra: Si la IP del usuario coincide con un patrón en ese fichero no se le permitirá crar una URL corta.

El uso como redireccionador (no para crear URLs, sino para acceder a las direcciones inidicadas por ellas) será permitido siempre.

un patrón de IP tiene una forma como las siguientes:

192.168.1.1 (indica esa dirección concreta)

192.168.1.* (indica un rango de direcciones desde 192.168.1.1 a 192.168.1.255)

192.168.*.1 (indica un rango de direcciones desde 192.168.1.1 a 192.168.255.1, cambiando sólo el segundo nivel)

*.*.*.* (indica todas las direcciones IP)

Para que una IP sea aceptada, debe cumplir ambos criterios: NO aparecer en blacklist.txt y SI aparecer en whitelist.txt. De este modo, si una IP coincide con patrones existente en ambas listas a la vez, no será admitida.

Si no existen ni whitelist.txt ni blacklist.txt, todas las IPs serán aceptadas.

##Licencia:

Copyright 2009-2024 Allan Psicobyte, Alejandro Machuca (Parallex)

sluger es una aplicación de la Oficina de Software Libre (http://osl.ugr.es/) de la Universidad de Granada (http://www.ugr.es/) que permite crear atajos con URLs cortas y redireccionar al usuario a través de ellas (smilar a servicios como tinyurl o ATAJA).

Es software libre y se distribuye bajo una licencia Affero (AFFERO GENERAL PUBLIC LICENSE: http://www.affero.org/oagpl.html).

This program is free software and it's licensed under the AFFERO GENERAL PUBLIC LICENSE (http://www.affero.org/oagpl.html).
