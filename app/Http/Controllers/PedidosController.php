<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoRequest;
use App\Mesa;
use App\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index(){
        $pedidos = Pedido::all();
        $mesas = Mesa::all();
        return view ('pedidos.index',['pedidos'=>$pedidos,'mesas'=>$mesas]);
    }

    public function create(){
        return view('pedidos.create');
    }

    public function store(PedidoRequest $request) {
        $novo_pedido = $request->all();
        Pedido::create($novo_pedido);
        return redirect()->route( 'pedidos');
    }

    public function destroy($id) {
        Pedido::find($id)->delete();
        return redirect()->route('pedidos');
    }

    public function edit($id) {
        $pedido = Pedido::find($id);
        return view('pedidos.edit',compact('pedido'));
    }

    public function update (PedidoRequest $request, $id) {
        $pedido = Pedido::find($id)->update($request->all());
        return redirect()->route('pedidos');
    }
}
