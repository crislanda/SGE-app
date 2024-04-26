<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Models\Organizador;
use App\Http\Controllers\OrganizadorController;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizadores = Organizador::all();
        return view('eventos.create', ['organizadores' => $organizadores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->nombre = $request->input('nombre');
        $evento->fecha = $request->input('fecha');
        $evento->organizador_id = $request->input('organizador_id');
        $evento->save();
        return to_route('eventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        $evento = Evento::find($id);
        return view('eventos.show', ['evento' => $evento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        $organizadores = Organizador::all();
        return view('eventos.edit', ['evento' => $evento, 'organizadores' => $organizadores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $evento->nombre = $request->input('nombre');
        $evento->fecha = $request->input('fecha');
        $evento->organizador_id = $request->input('organizador_id');
        $evento->save();
        return to_route('eventos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return to_route('eventos.index');
    }
}

