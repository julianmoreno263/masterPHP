<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FrutaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ruta simple
Route::get('/', function () {
    echo "<h1>Hola mundo</h1>";
});

//rutas llamando al metodo en el controlador respectivo, con parametro opcional en la ruta, este parametro se lo voy pasando por la url,por defecto le puedo poner que sea 1.
Route::get('/pelicula/{pagina?}', [PeliculaController::class,'index']);

//ruta del metodo detalle del controlador PeliculaController
Route::get('/detalle/{year?}', [PeliculaController::class,'detalle'])->middleware('TestYear');

//ruta que redirige a otra ruta
Route::get('/redirigir',[PeliculaController::class,'redirigir']);

//ruta para controlador de tipo resource,es un controlador que ya viene con metodos CRUD definidos,se crea con php artisan y el operador --resource, debemos importarlo en este archivo usando el operador use para poder llamarlo.
Route::resource('/usuario',UsuarioController::class);

//un middleware es una clase que se usa como filtro para una peticion,por ejemplo en la ruta detalle podemos pasar un parametro year opcional,y dependiendo si este parametro esta presente o no hacemos que por medio del middleware se haga algo especifico, por ejemplo si pasamos en la ruta un year y este es diferente al 2024 pues que me redirija a la pagina de peliculas.En si esto es una funcionalidad para las rutas.

//para que funcione el middleware debemos agregarlo en el archivo Kernel.php donde esta el $middlewareAliases, se le pone un nombre y se le pasa la ruta donde esta el middleware. Despues para usar el middleware en la ruta solo usamos la funcion middleware() y le pasamos el nombre del middleware que registramos.

//ruta para ver el formulario en laravel
Route::get('/formulario',[PeliculaController::class,'formulario']);

//ruta para recibir los datos que enviamos via post del formulario en laravel
Route::post('/recibir',[PeliculaController::class,'recibir']);


//Rutas para la practica de laravel con MVC y la bd fruteriaMaster

//esta ruta utilizara un prefijo(mas adelante lo vemos bien), en si esto se utiliza para que todas las rutas comienzen con la misma palabra, osea la palabra frutas y despues si la funcion especifica del controlador.Se crea un grupo de rutas para un controlador especifico.
Route::group(['prefix'=>'frutas'],function(){
    Route::get('index',[FrutaController::class,'index']);
    Route::get('detail/{id}',[FrutaController::class,'detail']);
    Route::get('create',[FrutaController::class,'create']);
    Route::post('save',[FrutaController::class,'save']);
});







//ruta que muestra una vista a la que se le pueden enviar parametros por view
// Route::get('/mostrarFecha', function () {
//     $titulo='Estoy mostrando la fecha';
//     return view('mostrarFecha',[
//         'titulo'=>$titulo
//     ]);
// });

// //ruta con parametros dentro {}, si el parametro es opcional le pongo un signo ?
// Route::get('/pelicula/{titulo?}', function ($titulo='El titulo es opcional') {
//     return view('pelicula',[
//         'titulo'=>$titulo
//     ]);
// });

// //ruta con parametros y con condiciones,puedo tener rutas con condiciones,por ejemplo puedo poner una condicion de que el parametro titulo sea un texto en minusculas,si le paso mayusculas no funcionara,o si le paso numeros tampoco
// Route::get('/pelicula2/{titulo}', function ($titulo) {
//     return view('pelicula2',[
//         'titulo'=>$titulo
//     ]);
// })->where([
//     'titulo'=>'[a-z]+'
// ]);


// //si en esta ruta no quiero pasar el $titulo dentro de un array, lo puedo pasar con el metodo with(), y puedo encadenar varios with para pasar parametros.
// Route::get('/listadoPeliculas', function () {
//     $titulo="Listado de peliculas";
//     $listado=['Batman','Spiderman','Gran Torino'];

//     return view('peliculas/listado')
//             ->with('titulo',$titulo)
//             ->with('listado',$listado);
// });

// Route::get('/paginaGenerica',function (){

//     return view('pagina');
// });
;
