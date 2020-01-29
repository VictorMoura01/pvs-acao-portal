<?php

namespace App\Http\Controllers;

use App\Area;
use App\Colaborador;
use App\Http\Requests\CadastraColaboradorFormRequest;
use Illuminate\Http\Request;
use function foo\func;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $colaboradores = Colaborador::all();
//        $areas = Area::all();
//        return view('equipe.index', compact('colaboradores', 'areas'));
        $colaboradores = Colaborador::all();
        $areas = Area::all();
        return view('dashboard.equipe', compact('colaboradores', 'areas'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novoColaborador = new Colaborador;
        $novoColaborador->nome = $request->nome;
        $novoColaborador->ano = $request->ano;
        $novoColaborador->save();

        $novoColaborador->areas()->attach(Area::find($request->area));
        return redirect()->route('listar_equipe');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Colaborador $colaborador
     * @return \Illuminate\Http\Response
     */
    public function show(Colaborador $colaborador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Colaborador $colaborador
     * @return \Illuminate\Http\Response
     */
    public function edit(Colaborador $colaborador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Colaborador $colaborador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colaborador $colaborador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Colaborador $colaborador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colaborador $colaborador)
    {
        //
    }
}
