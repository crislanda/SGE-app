<?php

namespace App\Http\Controllers;

use App\Models\Participacion;
use Illuminate\Http\Request;

class ParticipacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $participaciones = Participacion::all();
        return view('participaciones.index');
        // return view('participaciones.index', ['participaciones' => $participaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participacion = new Participacion();
        $participacion->nombre = $request->input('nombre');
        $participacion->save();
        return to_route('participaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participacion  $participacion
     * @return \Illuminate\Http\Response
     */
    public function show(Participacion $participacion)
    {
        $participacion = Participacion::find($id);
        return view('participaciones.show', ['participacion' => $participacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participacion  $participacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Participacion $participacion)
    {
        $participacion = Participacion::find($id);
        return view('participaciones.edit', ['participacion' => $participacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participacion  $participacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participacion $participacion)
    {
        $participacion->nombre = $request->input('nombre');
        $participacion->save();
        return to_route('participaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participacion  $participacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participacion $participacion)
    {
        $participacion->delete();
        return to_route('participaciones.index');
    }
}
