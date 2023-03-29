<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorT;
use App\Http\Requests\validadorS;

class controladorP extends Controller
{
    function findex(){
        return view('index');
    }
    function fsolTaller(){
        return view('solTaller');
    }
    function fsolServi(){
        return view('solSer');
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
    public function procesarServe(validadorS $req){
        return redirect('/solSer')->with('confirmacion','La solicitud se ha guardado');
    }
    function fDocCons(){
        return view('solDoc');
    }
}
