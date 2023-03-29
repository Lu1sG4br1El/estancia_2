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
    public function store(validadorT $req)
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
        $tallerid = DB::table('tb_talleres')->where('idt',$id)->first();
        return view('editTaller', compact('tallerid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        DB::table('tb_talleres')->where('idt',$id)->update([
            'nameTaller'=>$req->input('txtnameTaller'),
            'nameDocente'=>$req->input('txtnameDocente'),
            'nameAlum'=>$req->input('txtnameAlum'),
            'fh'=>$req->input('txtfh')
        ]);
        return redirect('listaT')->with('mensaje','Se actualizaron los datos de la solicitud');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('tb_talleres')->where('idt', $id)->delete();
        return redirect('listaT')->with('mensaje', "La solicitud del taller se elimino");
    }

    public function confirm($id){
        $tallerid = DB::table('tb_talleres')->where('idt',$id)->first();
        return view('confirmElim', compact('tallerid'));
    }
}
