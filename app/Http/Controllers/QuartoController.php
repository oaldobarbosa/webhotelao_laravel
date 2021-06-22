<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quarto;

class QuartoController extends Controller
{
    public function index(){

        $quartos = Quarto::all();

        return view('quarto.quartos', ['quartos' => $quartos]);
    }

    public function edit($id){

        $quarto = Quarto::findOrFail($id);

        return view('quarto.edit', ['quarto' => $quarto]);

    }

    public function update(Request $request){

        $quarto = Quarto::findOrFail($request->id)->update($request->all());

        return redirect('/quartos');


    }

}
