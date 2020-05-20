<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// // Consultar datos
// Route::get('/user', function () {
//     return view('usuarios');
// });

// // Enviar datos
// Route::post('/user', function () {
//     return view('welcome');
// });


// // Actualizar informacion
// Route::put('/user', function () {
//     return view('welcome');
// });


// // Eliminar informacion
// Route::delete('/user', function () {
//     return view('welcome');
// });

// Route::resource('/user', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/libros', function () {
//     return view('home');
// });

Route::get('/libros', 'LibrosController@index')->name('libros.index');
Route::get('/libros/create', 'LibrosController@create')->name('libros.create');
Route::post('/libros/store', 'LibrosController@store')->name('libros.store');

Route::get('/libros/{libro}/edit', 'LibrosController@edit')->name('libros.edit');
Route::put('/libros/update', 'LibrosController@update')->name('libros.update');


Route::get('/libros/{libro}', 'LibrosController@show')->name('libros.show');
Route::delete('/libros/{libro}', 'LibrosController@delete')->name('libros.delete');

/*
GET      -> Mostrar información
POST     -> Almacenar información
PUT      -> Actualizar información
DELETE   -> Eliminar información

*/