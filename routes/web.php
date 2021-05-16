<?php

use App\Cliente;
use Illuminate\Http\Request;
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
    Route::get('/cliente/relation/{id}', 'PDFController@client')->name('client/relation');
    Route::get('/cliente/proposta/{id}', 'PDFController@proposta')->name('cliente/proposta');
    Route::get('/cashier/pdf', 'PDFController@cashier')->name('cashier');
    Route::get('/whatsapp/pdf/{id}', 'PDFController@whatsapp')->name('whatsapp');

    //ROTAS CLIENTE
    Route::get('/cliente', 'AdminClienteController@createCliente')->name('cliente');
    Route::post('/cliente/create', 'ClienteController@create')->name('cliente/create');
    Route::post('/cliente/update/{id}', ['as' => 'cliente/update', 'uses' => 'ClienteController@update']);
    Route::get('/cliente/delete/{id}', ['as' => 'cliente/delete', 'uses' => 'ClienteController@destroy']);

    //ROTA EMAIL
    Route::get('/send-email/{id}', 'MailController@sendEmail')->name('Mail');
    Route::get('/send-email/proposta/{id}', 'MailController@sendEmailPropos')->name('Mail/propos');
    //FORGOT PASSWORD
    Route::get('/forgot-password', 'ForgotPasswordController@show')->name('forgot');
    Route::post('/send-forgot-password', 'MailController@forgotPassword')->name('sendForgot');
    Route::get('/password-recovery', 'ForgotPasswordController@index')->name('recovery');
    Route::post('/recovery-password', 'RecoveryController@update')->name('recovery-password');

    //ROTA SEARCH
    Route::post('/dashboard/search', 'ClienteController@index')->name('search');

    //ROTA DOWNLOAD
    Route::get('/download/{id}', 'DownloadController@show')->name('download');

});
