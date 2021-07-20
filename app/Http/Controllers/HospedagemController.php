<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Hospedagem;
use DateTime;
use Illuminate\Support\Facades\Date;
//
use Illuminate\Support\Facades\DB;

class HospedagemController extends Controller
{
    public function index(){

        $search = request('search');

        if ($search) {
            $hospedagens = Hospedagem::where([
                ['cpf_hospede', 'like', '%'.$search.'%']
            ])->where('status', 'ativa')->get();            
        } else {
            $hospedagens = Hospedagem::all()->where('status', 'ativa');            
        };
        
        $hoje = date('Y-m-d');

        return view ('hospedagem.hospedagens', ['hoje' => $hoje, 'hospedagens' => $hospedagens, 'search' => $search]);
    }

    public function create(){

        $hospedes = DB::table('hospedes')->get();

        $quartos = DB::table('quartos')->where('status', 'livre')->get();

        
        $hoje = date('Y-m-d');
        
        return view ('hospedagem.create', ['hospedes' => $hospedes, 'quartos' => $quartos, 'hoje' => $hoje]);
    }

    public function store(Request $request){

        $hospedagem = new Hospedagem;

        $hospedagem->cpf_hospede = $request->cpf_hospede;

        $hospedagem->qtd_pessoas = $request->qtd_pessoas;
        $hospedagem->numero_quarto = $request->numero_quarto;
        $hospedagem->data_hospedagem = Carbon::parse($request->input('data_hospedagem'));// $request->data_hospedagem;
        $hospedagem->valor_diaria = $request->valor_diaria;
        $hospedagem->observacoes = $request->observacoes;
        $hospedagem->servicos = $request->servicos;


        $hospedagem->save();

        return redirect('/hospedagens')->with('msg', 'Hospedagem Efetuada com Sucesso!');

    }

    public function show($id){

        $hospedagem = Hospedagem::findOrFail($id);
        

        $hoje = date('d/m/Y');
        

        return view('hospedagem.show', ['hospedagem' => $hospedagem, 'hoje' => $hoje]);

    }


    public function checkout($id){   

        $hoje = date('Y-m-d');
        $data_hospedagem = Hospedagem::select('data_hospedagem')->where('id', $id)->first()->data_hospedagem;        
        $date1 = Carbon::createFromFormat('Y-m-d', $hoje);   
        $date2 = Carbon::createFromFormat('Y-m-d', $data_hospedagem);
        $value = $date2->diffInDays($date1);
        
        if ($value == 0) {
            $value = 1;
        }
        

        $hospedagem = Hospedagem::findOrFail($id); 
       

        return view('hospedagem.checkout',['hoje' => $hoje, 'hospedagem' => $hospedagem, 'value' => $value]);
    }

    public function update(Request $request){

        $hospedagem = Hospedagem::findOrFail($request->id)->update($request->all());

        return redirect('/hospedagens')->with('msg', 'Hospedagem finalizada com Sucesso!');

    }



}
