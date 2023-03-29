<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\validadorS;
use Carbon\Carbon;

class c_BD_serv extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarServ = DB::table('tb_servicio')->get();
        return view('consSer', compact('consultarServ'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('solSer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        DB::table('tb_servicio')->insert([
            'nameAlumno'=>$req->input('txtnameAlumn'),
            'nameServicio'=>$req->input('txtnameServe'),
            'fecha'=>Carbon::now()
        ]);
        return redirect('listaS/create')->with('confirmacion','Solicitud del servicio guardada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
