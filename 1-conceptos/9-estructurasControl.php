
<?php 

//las estructuras de control son estructuras de codigo que nos permiten evaluar condiciones y tambien cambiar el flujo de ejecucion del programa,estas estructuras son los condicionales y bucles,para evaluar las condiciones nos ayudamos de los operadores de comparacion.

//operadores de comparacion
// == igual
// ===identico
// !=diferente
// <>diferente
// !==no identico
// < menor que
// >mayor que
// <=menor o igual que
// >=mayor o igual que

//condicionales - if(pueden haber if anidados)

$color='rojo';
if ($color=='rojo') {
    echo 'El color es rojo';
}else{

    echo 'El color no es rojo';
};

'<br>';



//ejemplo 2, if anidados
$nombre = "sandra";
$ciudad = "Madrid";
$continente = "America";
$edad = 22;
$mayoriaEdad = 18;

if ($edad >= $mayoriaEdad) {

    echo "<h1>$nombre es mayor de edad</h1>";

    if ($continente == "Europa") {

        echo "<h1>y es de la ciudad de $ciudad</h1>";
    } else {

        echo "<h2>$nombre no vive en Europa</h2>";
    }
} else {

    echo "<h2>$nombre es menor de edad</h2>";
}

echo "<hr>";


//ejemplo 3, else-if,para no hacer tantos if anidados.
$dia = 5;

if ($dia == 1) {

    echo "Es lunes";
} elseif ($dia == 2) {
    echo "Es martes";
} elseif ($dia == 3) {
    echo "Es miercoles";
} elseif ($dia == 4) {
    echo "Es jueves";
} elseif ($dia == 5) {
    echo "Es viernes";
} else {
    echo "Es fín de semana";
}

echo "<hr>";

//ejemlo 4, operadores logicos
// && AND
// || OR (ALT + 124)
// ! NOT
$edad1 = 18;
$edad2 = 64;
$edadOficial = 10;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {

    echo "Estas en edad de trabajar";
} else {

    echo "No estás en edad de trabajar";
}

echo "<hr>";

$pais = "Colombia";

if ($pais == "Colombia" || $pais = "España" || $pais == "Mexico") {

    echo "En $pais se habla Español";
} else {

    echo "No se habla español";
}

echo "<hr>";

//switch, evalua una variable y sus posibles valores
$dia = 4;

switch ($dia) {
    case '1':
        echo "lunes";
        break;
    case '2':
        echo "martes";
        break;
    case '3':
        echo "miercoles";
        break;
    case '4':
        echo "jueves";
        break;
    case '5':
        echo "viernes";
        break;
    default:
        echo "es fín de semana";
        break;
}

echo "<hr>";

//goto, sirve para dar saltos en el codigo, creo una marca
goto marca;

echo "<h3>instrucción 1</h3>";
echo "<h3>instrucción 2</h3>";
echo "<h3>instrucción 3</h3>";
echo "<h3>instrucción 4</h3>";

marca:
echo "Me salté 4 echos";



