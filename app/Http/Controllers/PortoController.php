<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function U17(){
        return view('porto.U17');
    }

    public function Istopila(){
        return view('porto.Istopila');
    }

    public function GoTrans(){
        return view('porto.Gotrans');
    }

    public function Portfolio(){
        return view('porto.Portfolio');
    }
}
