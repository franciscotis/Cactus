<?php

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
    return view('index');
});

Route::get('/index', function() {
	return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin','AdminController');

Route::get('ControleUsuario','AdminController@controleUsuario')->name('controleUsuario');

Route::get('adicaoAdmin','AdminController@adicaoAdmin')->name('adicaoAdmin');

Route::get('controlePlanta','AdminController@controlePlanta')->name('controlePlanta');

Route::get('adicaoPlanta','AdminController@adicaoPlanta')->name('adicaoPlanta');

Route::get('apagarUsuarioAdmin/{id}','AdminController@apagarUsuario')->name('apagarUsuarioAdmin');

Route::resource('planta','PlantaController');

Route::get('apagarPlanta/{id}','PlantaController@destroy')->name('apagarPlanta');

Route::get('editarPlanta/{id}','PlantaController@edit')->name('editarPlanta');

Route::post('editarPlanta/{id}','PlantaController@update')->name('editarPlanta');

Route::get('admin_area', ['middleware' => 'admin', function () {
        Route::get('admin', 'AdminController@index');
}]);