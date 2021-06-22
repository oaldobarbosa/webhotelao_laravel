<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hospede;

class HospedeController extends Controller
{
    public function index(){

        $search = request('search');

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

    public function store(Request $request){

        $hospede = new Hospede;

        $hospede->nome = $request->nome;
        $hospede->cpf = $request->cpf;
        $hospede->telefone = $request->telefone;
        $hospede->sexo = $request->sexo;
        $hospede->data_nascimento = $request->data_nascimento;

        $hospede->save();

        return redirect()->back()->with('msg', 'Hospede Adicionado com Sucesso!');

        //return redirect('/hospedes')->with('msg', 'Hospede Adicionado com Sucesso!');

    }

    public function show($id){

        $hospede = Hospede::findOrFail($id);

        return view('hospede.show', ['hospede' => $hospede]);

    }

    public function destroy($id){

        $hospede = Hospede::findOrFail($id)->delete();

        return redirect('/hospedes')->with('msg', 'Hóspede Deletado Com Sucesso');
    }

    public function edit($id){

        $hospede = Hospede::findOrFail($id);

        return view('hospede.edit', ['hospede' => $hospede]);

    }

    public function update(Request $request){

        $hospede = Hospede::findOrFail($request->id)->update($request->all());

        return redirect('/hospedes')->with('msg', 'Dados do Hóspede Atualizado Com Sucesso!');

    }
    //
}
