<?php

namespace App\Http\Controllers;

use App\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setores = Setor::all();
        return response()->json($setores);
    }

    public function select(){
        $setores = Setor::all();
        $option='<option>Selecione...</option>';
        foreach ($setores as $setor){
            $option.='<option value="'.$setor->id.'">'.$setor->name.'</option>';
        }
        return response()->json($option);
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
        $setores = new Setor();
        $setores->name = $request->nome;
        $setores->save();
        if(!$setores) {
            $retorno['success']=false;
            $retorno['message']='Erro ao salvar';
        }
        $retorno['success']=true;
        $retorno['message']="Cadastrado com sucesso!";
        echo json_encode($retorno);
        return;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function show(Setor $setor)
    {
        $setores = Setor::all();
        return view('setor/listSetores',[
            'setores' => $setores,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function edit(Setor $setor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setor $setor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setor $setor)
    {
        //
    }
}
