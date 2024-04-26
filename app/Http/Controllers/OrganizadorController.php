<?php

namespace App\Http\Controllers;

use App\Models\Organizador;
use Illuminate\Http\Request;

class OrganizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $organizadores = Organizador::all();
        return view('organizadores.index');
        // return view('organizadores.index', ['organizadores' => $organizadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizador = new Organizador();
        $organizador->nombre = $request->input('nombre');
        $organizador->save();
        return to_route('organizadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organizador  $organizador
     * @return \Illuminate\Http\Response
     */
    public function show(Organizador $organizador)
    {
        $organizador = Organizador::find($id);
        return view('organizadores.show', ['organizador' => $organizador]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organizador  $organizador
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizador $organizador)
    {
        $organizador = Organizador::find($id);
        return view('organizadores.edit', ['organizador' => $organizador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organizador  $organizador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizador $organizador)
    {
        $organizador->nombre = $request->input('nombre');
        $organizador->save();
        return to_route('organizadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organizador  $organizador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizador $organizador)
    {
        $organizador->delete();
        return to_route('organizadores.index');
    }
}
