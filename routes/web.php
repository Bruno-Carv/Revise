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

})->name('home');

Route::get('/aplicativo', function () {

    return view('aplicativo');

})->name('aplicativo');

Route::get('/plano', function () {

    return view('planos');

})->name('plano');

Route::get('/sobre', function () {

    return view('sobre');

})->name('sobre');

Route::get('/cadastro/{id}', function ($id) {
    switch ($id) {
        case 'juridico': {
                'controllerJuridico@PaginaCadastro';
                break;
            }
        case 'fisico': {
                'controllerFisico@PaginaCadastro';
                break;
            }
        default: {
                return back();
                break;
            }
    }
})->name('cadastro');

Route::get('/SignIn', function () {

    return view('login');

})->name('login');

Route::get('/Esqueci', function () {

    return view('Esqueci');

});

Route::post('/home', 'controllerUsuario@Acesso');

Route::get('/home', 'controllerUsuario@Acesso');


Route::get(
    '/Cadastro/{}',
    [
        'fisico' => 'controllerFisico@Cadastro',
        'Juridico' => 'controllerJuridico@Cadastro'
    ]
);
