<?php 

#los include son utiles para vicular codigo que este en un archivo externo al archivo donde estemos trabajando,asi podemos reutilizar archivos donde los necesitemos.Por ejemplo creamos una pagina web,esta tendra un menu con enlaces a otras dos paginas,pero la cabecera y el footer siempre seran iguales en todas las paginas,entonces podemos poner en un archivo aparte el codigo de la cabecera y vincular ese archivo a las demas paginas con un include,asi no tenemos que repetir el mismo codigo de la cabecera en todas las paginas del sitio.Asi el codigo queda mas limpio,mantenible y reutilizable.

#el otro include es include_once() la diferencia es que con include() podemos incluir ese archivo las veces que queramos en el codigo,pero include_once() solo deja incluir el archivo una sola vez.

#el require es mas estricto, con include() si se carga mal la ruta al archivo saca un error pero deja ejecutar el resto de la pagina,mientras que con require() si se escribe mal la ruta al archivo detiene por completo la ejecucion del programa, es mas estricto, a veces es mas recomendable utilizar el require por esto mismo.

#por ultimo esta el require_once() que es el mas estricto de todos,se debe poner bien la ruta al archivo y ademas solo permite ejecutar ese archivo una sola vez,no permite ponerlo varias veces.



?>