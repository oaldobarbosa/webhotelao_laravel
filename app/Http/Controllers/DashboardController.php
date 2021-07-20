<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        $hospedagens = DB::table('hospedagens')->where('status', 'ativa')->count();
        $hospedes = DB::table('hospedes')->count();
        $quartos_livres = DB::table('quartos')->where('status', 'livre')->count();

        $hoje = date('d/m/Y');

        return view('dashboard', ['hospedagens' => $hospedagens, 'hospedes' => $hospedes, 'quartos_livres'=> $quartos_livres, 'hoje' => $hoje]);

    }
    //
}
