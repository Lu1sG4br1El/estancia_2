<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorT;

class controladorP extends Controller
{
    function findex(){
        return view('index');
    }
    function fsolTaller(){
        return view('solTaller');
    }
    function flistTaller(){
        return view('listTaller');
    }
    function fconsTaller(){
        return view('consTaller');
    }
    public function procesarTaller(validadorT $req){
        return redirect('/solTaller')->with('confirmacion','La solicitud se ha guardado');
    }
    function fDocCons(){
        return view('solDoc');
    }
}
