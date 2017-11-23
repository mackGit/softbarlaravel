<?php

namespace App\Http\Controllers;


use App\Http\Requests\MesaRequest;
use App\Mesa;

use Illuminate\Http\Request;

class MesasController extends Controller
{
    public function index(){
        $mesas = Mesa::all();
        return view ('mesas.index',['mesas'=>$mesas]);
    }

    public function create(){
        return view('mesas.create');
    }

    public function store(MesaRequest $request) {
        $novo_mesa = $request->all();
        Mesa::create($novo_mesa);
        return redirect()->route( 'mesas');
    }

    public function destroy($id) {
        Mesa::find($id)->delete();
        return redirect()->route('mesas');
    }

    public function edit($id) {
        $mesa = Mesa::find($id);
        return view('mesas.edit',compact('mesa'));
    }

    public function update (MesaRequest $request, $id) {
        $mesa = Mesa::find($id)->update($request->all());
        return redirect()->route('mesas');
    }
}
