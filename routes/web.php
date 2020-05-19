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
