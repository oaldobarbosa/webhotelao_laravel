<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quarto;

class QuartoController extends Controller
{
    public function index(){


        $search = request('search');
        //filtrar pelo search
        if ($search) {

            $quartos = Quarto::where([
                ['numero_quarto', 'like', '%'.$search.'%']

            ])->get();
            
        }else {

            $quartos = Quarto::all();
    
        }


        

        return view('quarto.quartos', ['quartos' => $quartos]);
    }

    public function edit($id){

        $quarto = Quarto::findOrFail($id);

        return view('quarto.edit', ['quarto' => $quarto]);

    }

    public function update(Request $request){

        $quarto = Quarto::findOrFail($request->numero_quarto)->update($request->all());

        return redirect('/quartos');


    }

    // metodo no controller

    public function searchQuartos(Request $request){
        if($request->ajax()) {

            $quartos = Quarto::where('qtd_pessoas', $request->qtd_pessoas)->where('status', 'livre')->get();
            return response()->json($quartos);
        }
    }

    public function searchValor(Request $request){

        if($request->ajax()) {

            $quartos = Quarto::where('numero_quarto', $request->numero_quarto)->get();
            return response()->json($quartos);
        }

    }

}
