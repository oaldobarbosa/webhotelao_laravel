<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospedagemController extends Controller
{
    public function index(){
        return view ('hospedagem.hospedagens');
    }

    public function create(){
        return view ('hospedagem.create');
    }
    //
}
