<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\validadorT;
use Illuminate\Http\Request;

class c_BD_taller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarTalleres = DB::table('tb_talleres')->get();
        return view('consTaller', compact('consultarTalleres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('solTaller');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        DB::table('tb_talleres')->insert([
            'nameTaller'=>$req->input('txtnameTaller'),
            'nameDocente'=>$req->input('txtnameDocente'),
            'nameAlum'=>$req->input('txtnameAlum'),
            'fh'=>$req->input('txtfh')
        ]);
        return redirect('listaT/create')->with('confirmacion','Solicitud de taller guardada');
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
