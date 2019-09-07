<?php

namespace App\Http\Controllers;

use App\modelUsuario;
use Illuminate\Http\Request;

class controllerUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modelUsuario  $modelUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(modelUsuario $modelUsuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modelUsuario  $modelUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(modelUsuario $modelUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modelUsuario  $modelUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modelUsuario $modelUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modelUsuario  $modelUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(modelUsuario $modelUsuario)
    {
        //
    }



    public function Cadastro($type){
        switch ($type) {
            case 'fisico':
                return view('Fisico/perfil.fisico.create');
                break;
            case 'juridico':
                return view('Juridico/perfil.juridico.create');
                break;
        }
    }
}
