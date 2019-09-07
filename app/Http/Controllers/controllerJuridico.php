<?php

namespace App\Http\Controllers;

use App\modelJuridico;
use Illuminate\Http\Request;

class controllerJuridico extends Controller
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
        return view('cadastro.juridico');
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
     * @param  \App\modelJuridico  $modelJuridico
     * @return \Illuminate\Http\Response
     */
    public function show(modelJuridico $modelJuridico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modelJuridico  $modelJuridico
     * @return \Illuminate\Http\Response
     */
    public function edit(modelJuridico $modelJuridico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modelJuridico  $modelJuridico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modelJuridico $modelJuridico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modelJuridico  $modelJuridico
     * @return \Illuminate\Http\Response
     */
    public function destroy(modelJuridico $modelJuridico)
    {
        //
    }
}
