<?php

namespace App\Http\Controllers;

use App\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despesas = Despesa::all();
        return view('despesa.index', compact('despesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('despesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'descricao' => 'required|max:255',
            'data' => 'required',
            'valor' => 'required',
            'categoria_id' => 'required'
        ]);

        $despesa = Despesa::create($validateData);

        return redirect('/despesa')->with('success', 'Despesa Criada com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function show(Despesa $despesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Retorna os dados da categoria
        $despesa = Despesa::findOrFail($id);
        return view('despesa.edit', compact('despesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Despesa $despesa)
    {
        $validateData = $request->validate([
            'descricao' => 'required|max:255',
            'data' => 'required',
            'valor' => 'required',
            'categoria_id' => 'required'
        ]);

        Despesa::whereId($id)->update($validateData);

        return redirect('/despesa')->with('success', 'Despesa alterada com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $despesa = Despesa::findOrFail($id);
        $despesa->delete();
        return redirect('/despesa')->with('success', 'Despesa reovida com sucesso!');
    }
}
