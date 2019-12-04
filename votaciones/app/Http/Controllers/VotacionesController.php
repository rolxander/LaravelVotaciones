<?php

namespace App\Http\Controllers;

use App\votaciones;
use Illuminate\Http\Request;

class VotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['votaciones'] = Votaciones::paginate();
        return view('Votaciones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Votaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosVotacion = $request->all();
        //return response()->json($datosVotacion);
        $datosVotacion = $request->except('_token');
        Votaciones::insert($datosVotacion);
        return redirect('votaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\votaciones  $votaciones
     * @return \Illuminate\Http\Response
     */
    public function show(votaciones $votaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\votaciones  $votaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mesa = Votaciones::findOrFail($id);

        return view('Votaciones.edit',compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\votaciones  $votaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        Votaciones::where('id','=',$id)->update($datos);
        $mesa = Votaciones::findOrFail($id);
        return view('Votaciones.edit',compact('mesa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\votaciones  $votaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_mesa)
    {
      Votaciones::destroy($cod_mesa);
      return redirect('votaciones');
    }
}
