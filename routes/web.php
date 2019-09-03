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
    return view('welcome');
});

Route::get('/aplicativo', function () {
    return view('aplicativo');
});

Route::get('/planos', function () {
    return view('planos');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/cadastro-juridico', function(){
    return view('login');
});

Route::get('/cadastro-juridico', function(){
    return view('login');
});

Route::get('/SignIn', function(){
    return view('login');
});

Route::post('/SignIn', 'UsuarioController@AcessoUsuario');