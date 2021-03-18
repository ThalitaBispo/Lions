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

Route::get('/home', 'AdminController@home')->name('home');

Route::middleware(['web'])->group(function () {
    //LOGIN
    Route::post('/login', 'AuthController@login')->name('login');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/dashboard', 'AuthController@dashboard')->name('dashboard');

    //ROTAS ADMIN
    Route::get('/dashboard/create/user', 'AdminController@createUser')->name('dashboard/create/user');
    Route::get('/dashboard/update/user/{id}', 'AdminController@updateUser')->name('dashboard/update/user');

    Route::get('/dashboard/update/cliente/{id}', 'AdminClienteController@updateCliente')->name('dashboard/update/cliente');

    //ROTAS USER
    Route::get('/user', 'UserController@index')->name('user');
    Route::post('/user/create', 'UserController@create')->name('user/create');
    Route::get('/user/find/{id}', ['as' => 'user/find', 'uses' => 'UserController@show']);
    Route::post('/user/update/{id}', ['as' => 'user/update', 'uses' => 'UserController@update']);
    Route::get('/user/delete/{id}', ['as' => 'user/delete', 'uses' => 'UserController@destroy']);

    //ROTAS RELATORIOS
    Route::get('/user/relation', 'PDFController@user')->name('user/relation');
    Route::get('/client/relation', 'PDFController@client')->name('client/relation');

    //ROTAS CLIENTE
    Route::get('/cliente', 'AdminClienteController@createCliente')->name('cliente');
    Route::post('/cliente/create', 'ClienteController@create')->name('cliente/create');
    Route::get('/cliente/delete/{id}', ['as' => 'cliente/delete', 'uses' => 'ClienteController@destroy']);

});
