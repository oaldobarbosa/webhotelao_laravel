<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        //$hospedagens = DB::table('hospedagens')->count();
        $hospedes = DB::table('hospedes')->count();
        //$hospedagens = DB::table('users')->count();

        return view('dashboard', ['hospedes' => $hospedes]);

    }
    //
}
