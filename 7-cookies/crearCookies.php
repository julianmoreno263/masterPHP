<?php 

#Las cookies son pequeños fragmentos de texto que los sitios web que visitas envían al navegador. Permiten que los sitios web recuerden información sobre tu visita, lo que puede hacer que sea más fácil volver a visitar los sitios y hacer que estos te resulten más útiles.Una cookie es un fichero de datos que una página web le envía a tu ordenador cuando la visitas. Da igual si estás entrando a la web desde el ordenador o desde el móvil, siempre se solicitará el almacenamiento de la cookie. Tampoco importa si entras desde un navegador independiente o desde el navegador integrado en alguna herramienta o aplicación, también se solicitará la cookie.

#La solicitud de almacenamiento del fichero de información en tu ordenador la hará directamente el servidor de la web a la que entras en el mismo momento en el que accedes a ella. Por lo general, notarás que se está solicitando la utilización de cookies porque las webs están obligadas a avisarte y a preguntarte cuáles quieres instalar por la GDPR, la normativa que regula la protección de los datos de los ciudadanos que vivan en la Unión Europea.

#Las cookies suelen utilizarse principalmente para dos finalidades principales: recordar accesos y conocer hábitos de navegación. Las cookies hacen que las páginas web puedan identificar tu ordenador, y por lo tanto, si vuelves a entrar a ellas podrán recordar quién eres y qué has hecho antes dentro de ellas.

#Lo más importante de las cookies son sus funciones para recordar accesos. Si no existieran, cada vez que entras en una página tendrías que iniciar sesión en ella, algo que acabaría siendo incómodo. En cambio, gracias a las cookies la página web podrá recordar que eres tú, y por lo tanto podrá permitirte seguir en el perfil con el que iniciases sesión sin tener que volver a escribir tus credenciales.

#Y la segunda función es la más conflictiva, y precisamente la que ha hecho que tengan tan mala fama. Las cookies también sirven para conocer la información sobre tus hábitos de navegación, algo que pueden utilizar terceros para enviarte información relacionada a tus intereses, pero también para identificarte como usuario según las páginas que visitas.Estas cookies son como cámaras de vigilancia colocadas por estas empresas por todo Internet, de manera que pueden saber en qué páginas entras, y por lo tanto, crear un perfil de tus gustos personales. También pueden registrar tus búsquedas en los buscadores como Google o Bing, o los internos de tiendas online, también para conocer tus gustos y necesidades.Existen diferentes tipos de cookies cuando entras en una web. Los primeros dos tipos son las cookies temporales y las permanentes. Las cookies temporales sólo permanecen en tu navegador hasta que te vas de la página web, por lo que no se quedan instaladas en tu navegador u ordenador. Las cookies permanentes o persistentes, en cambio, se quedan en el disco duro de tu ordenador para que la página que las instala pueda leerlas e identificarte cada vez que vuelvas a visitarla. Suelen tener fechas de expiración.(tomado de https://www.xataka.com/basics/que-cookies-que-tipos-hay-que-pasa-desactivas)

#Resumen: cookies es un archivo que se almacena en el pc del usuario que visita una pagina web, con el fin de recordar datos de sesion del usuario,o comportamientos de navegacion del usuario.Para crear mis cookies debo usar el metodo setcookie() y para ver su valor uso la variable superglobal $_COOKIE.Las cookies se guardan en el pc, a diferencia de las sesiones que se guardan en el servidor.Las cookies son inseguras precisamente porque se almacenan en el pc del usuario y este puede manipularlas.

#cuando abra el archivo para ver los valores d elas cookies,puedo abrir las herramientas de desarrollador en el navegador y en la parte de aplication puedo ver el enlace a las cookies,estara en mi localhost y vere las cookies con su descripcion.

//crear cookies en php
//setcookie("nombre","valor de la cookies solo puede ser texto",caducidad,ruta,dominio);

//cookie basica
setcookie("micookie","valor de mi galleta");

//cookie con expiracion, dura un year
setcookie("unyear","valor de mi cookie de 365 dias",time()+(60*60*24*365));

header("location:verCookies.php");
?>

