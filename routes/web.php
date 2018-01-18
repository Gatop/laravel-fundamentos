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
// App\User::create([
//     'name' => 'jegaest',
//     'email' => 'jegaest@juju.com',
//     'password' => bcrypt('test123'),
// ]);

// Listar sentencias sql en web
/*DB::listen(function($query){
    echo "<pre>{$query->sql}</pre>";
    //echo "<pre>{$query->time}</pre>";
});*/

Route::get('roles', function(){
    return \App\Role::with('user')->get();
});

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('/home', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");

// Implementation for messages
Route::resource('mensajes', 'MessagesController');

// Implementation for users
Route::resource('usuarios', 'UsersController');

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout');

