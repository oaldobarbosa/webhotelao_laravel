<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hospede;

class HospedeController extends Controller
{
    public function index(){

        $hospedes = Hospede::all();

        return view('hospede.hospedes', ['hospedes' => $hospedes]);
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

        return redirect('/hospedes');

    }

    public function show($id){

        $hospede = Hospede::findOrFail($id);

        return view('hospede.show', ['hospede' => $hospede]);

    }

    public function destroy($id){

        $hospede = Hospede::findOrFail($id)->delete();

        return redirect('/hospedes');
    }
    //
}
