<?php

namespace App\Http\Controllers;

use App\platos;
use Illuminate\Http\Request;

class PlatosController extends Controller
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
        return view('admin.agregar_plato');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data                   = $request->all();
        $data['restaurante_id'] = $request->user()->id;
        platos::create($data);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\platos  $platos
     * @return \Illuminate\Http\Response
     */
    public function show(platos $platos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\platos  $platos
     * @return \Illuminate\Http\Response
     */
    public function edit(platos $platos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\platos  $platos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, platos $platos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\platos  $platos
     * @return \Illuminate\Http\Response
     */
    public function destroy(platos $platos)
    {
        //
    }
}
