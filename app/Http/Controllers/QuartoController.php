<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quarto;

class QuartoController extends Controller
{
    public function index(){

        $quartos = Quarto::all();

        return view('quartos', ['quartos' => $quartos]);
    }

}
