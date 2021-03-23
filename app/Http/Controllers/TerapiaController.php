<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerapiaController extends Controller
{
    

    public function index(){

        return view('terapia.terapias');
    }
}
