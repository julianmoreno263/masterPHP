<?php 

#una sesion sirve para poder persistir la informacion mientras el usuario esta navegando en la pagina web.Una sesion es el periodo de tiempo mediante el cual el usuario puede ver o navegar por la pagina web sin necesidad de autenticarse cada vez que cambia de pagina,osea la sesion mantiene los datos del usuario hasta que este cierre sesion del sitio web o cierre el navegador.La sesion debe ser capaz de almacenar y persistir los datos del usuario mientras navega por el sitio web,cuando se cierre la sesion esa sesion se borra.Los datos de la sesion se van almacenando en el servidor web por lo que son muy seguras porque no se dejan modificar por el cliente y ademas pueden almacenar mucha informacion sin problema.Para poder trabajar con sesiones debemos utilizar la funcion session_start() para iniciar una sesion, y para crear la sesion usamos la variable superglobal $_SESSION[] el cual es un array y me permite alamcenar varios datos.

#yo creo aqui una sesion,y esta la puedo utilizar en los diferentes archivos de mi pagina web donde necesite usar esta sesion,para ello siempre debo iniciar la sesion en ese archivo donde la necesite y asi puedo usarla.

#si cierro el navegador se mantiene la sesion en estos navegadores modernos,pero puedo especificar que se destruya esa sesion usando el metodo session_destroy().Cuando abra el archivo logout.php que tiene esta funcion me destruira la sesion y ya no podre ver en pantalla la variable de sesion que cree,si abro el archivo index.php que es el que crea la sesion pues la tendre de nuevo activa.

//iniciar sesion
session_start();

//variable de sesion
$_SESSION["variablePersistente"]="Hola, soy una sesion activa";

echo $_SESSION["variablePersistente"];




?>