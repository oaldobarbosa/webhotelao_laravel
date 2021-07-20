<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historico;

class HistoricoController extends Controller
{
    public function index(){

        $historicos = Historico::all();

        return view('hospedagem.historico', ['historicos' => $historicos]);
    }

    public function show($id){

        $historico = Historico::findOrFail($id);

        return view('hospedagem.show_historico', ['historico' => $historico ]);
    }
    //
}
