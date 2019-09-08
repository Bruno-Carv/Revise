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

Route::get('/cadastro/{id}', function ($id) {
    switch($id){
        case 'juridico':{
            return view('Juridico.perfil.create');
            break;
        }
        case 'fisico':{
            return view('Fisico.perfil.create');
            break;
        }
        default:{
            return back();
            break;
        }
    }
});

Route::get('/SignIn', function(){
    return view('login');
});

Route::get('/Esqueci', function(){
    return view('Esqueci');
});

Route::post('/home', 'controllerUsuario@Acesso');
Route::get('/home', 'controllerUsuario@Acesso');


Route::get('/Cadastro/{}', [
    'fisico' => 'controllerFisico@Cadastro', 
    'Juridico' => 'controllerJuridico@Cadastro']
);