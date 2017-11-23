<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Categoria;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view ('categorias.index',['categorias'=>$categorias]);
    }

    public function create(){
        return view('categorias.create');
    }

    public function store(CategoriaRequest $request) {
        $novo_categoria = $request->all();
        Categoria::create($novo_categoria);
        return redirect()->route( 'categorias');
    }

    public function destroy($id) {
        Categoria::find($id)->delete();
        return redirect()->route('categorias');
    }

    public function edit($id) {
        $categoria = Categoria::find($id);
        return view('categorias.edit',compact('categoria'));
    }

    public function update (CategoriaRequest $request, $id) {
        $categoria = Categoria::find($id)->update($request->all());
        return redirect()->route('categorias');
    }
}
