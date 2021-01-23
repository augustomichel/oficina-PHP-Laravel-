<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carro::all();

        return view('carros.index', compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
            'nome' => 'required',
            'veiculo' => 'required',
            'placa' => 'required',
            ],         
           [
                'required' => 'O campo :attribute é obrigatório',
            ], [
                'nome'      => 'Nome',
                'veiculo'     => 'Veículo',
                'placa'  => 'Placa',
            ]);

            Carro::create($request->all());
           
    
            return redirect()->route('carros.index')
    
                    ->with('success','Veículo cadastrado com sucesso.');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Carro $carro)
    {
        return view('carros.show',compact('carro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $carro)
    {
        return view('carros.edit',compact('carro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        $request->validate([
            'nome' => 'required',
            'veiculo' => 'required',
            'placa' => 'required',
            ], 
           [
                'required' => 'O campo :attribute é obrigatório',
            ], [
                'nome'      => 'Nome',
                'veiculo'     => 'Veículo',
                'placa'  => 'Placa',
            ]);
    
            $carro->update($request->all());
    
            return redirect()->route('carros.index')->with('success','Veículo Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        $carro->delete();



        return redirect()->route('carros.index')

                ->with('success','Veículo deletado com sucesso');


    }
}
