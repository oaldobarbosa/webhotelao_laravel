<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exceptions\Handler;
use App\Http\Requests\HospedeRequest;
use App\Models\Hospede;
//
use Illuminate\Support\Facades\DB;

use phpDocumentor\Reflection\Types\Null_;

class HospedeController extends Controller
{
    public function index(){

        $search = request('search');
        //filtrar pelo search
        if ($search) {

            $hospedes = Hospede::where([
                ['nome', 'like', '%'.$search.'%']

            ])->get();
            
        }else {

            $hospedes = Hospede::all();
            
        }
   
        return view('hospede.hospedes', ['hospedes' => $hospedes, 'search' => $search]);
    }

    public function create(){

        return view ('hospede.create');
    }

    public function store(HospedeRequest $request){

        $hospede = new Hospede;

        $hospede->nome = $request->nome;
        $hospede->cpf_hospede = $request->cpf_hospede;
        $hospede->telefone = $request->telefone;
        $hospede->sexo = $request->sexo;
        $hospede->data_nascimento = $request->data_nascimento;

        $hospede->save();

        return redirect('/hospedagens/create')->with('msg', 'Hospede Adicionado com Sucesso!');

    }

    public function show($cpf){

        $hospede = Hospede::findOrFail($cpf);
        return view('hospede.show', ['hospede' => $hospede]);

    }

    public function destroy($cpf){

        try {

            $hospede = Hospede::findOrFail($cpf)->delete();
            return redirect('/hospedes')->with('msg', 'Hóspede Deletado Com Sucesso');   
            
        } catch (\Throwable $th) {
            return redirect('/hospedes')->with('msg-erro', 'Hóspede Relacionado à uma Hospedagem!');

        }
    
    }

    public function edit($cpf){

        $hospede = Hospede::findOrFail($cpf);

        return view('hospede.edit', ['hospede' => $hospede]);

    }

    public function update(HospedeRequest $request){

        $hospede = Hospede::findOrFail($request->cpf)->update($request->all());
        return redirect('/hospedes')->with('msg', 'Dados do Hóspede Atualizado Com Sucesso!');

    }
    //
}
