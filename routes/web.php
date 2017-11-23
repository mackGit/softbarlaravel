<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'usuarios', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',            ['as'=>'usuarios',           'uses'=>'UsuariosController@index']);
    Route::get('create',      ['as'=>'usuarios.create',    'uses'=>'UsuariosController@create']);
    Route::get('{id}/destroy',['as'=>'usuarios.destroy',   'uses'=>'UsuariosController@destroy']);
    Route::get('{id}/edit',   ['as'=>'usuarios.edit',      'uses'=>'UsuariosController@edit']);
    Route::put('{id}/update', ['as'=>'usuarios.update',    'uses'=>'UsuariosController@update']);
    Route::post('store',      ['as'=>'usuarios.store',     'uses'=>'UsuariosController@store']);
});


Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',            ['as'=>'produtos',           'uses'=>'ProdutosController@index']);
    Route::get('create',      ['as'=>'produtos.create',    'uses'=>'ProdutosController@create']);
    Route::get('{id}/destroy',['as'=>'produtos.destroy',   'uses'=>'ProdutosController@destroy']);
    Route::get('{id}/edit',   ['as'=>'produtos.edit',      'uses'=>'ProdutosController@edit']);
    Route::put('{id}/update', ['as'=>'produtos.update',    'uses'=>'ProdutosController@update']);
    Route::post('store',      ['as'=>'produtos.store',     'uses'=>'ProdutosController@store']);
});

Route::group(['prefix'=>'categorias', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',            ['as'=>'categorias',           'uses'=>'CategoriasController@index']);
    Route::get('create',      ['as'=>'categorias.create',    'uses'=>'CategoriasController@create']);
    Route::get('{id}/destroy',['as'=>'categorias.destroy',   'uses'=>'CategoriasController@destroy']);
    Route::get('{id}/edit',   ['as'=>'categorias.edit',      'uses'=>'CategoriasController@edit']);
    Route::put('{id}/update', ['as'=>'categorias.update',    'uses'=>'CategoriasController@update']);
    Route::post('store',      ['as'=>'categorias.store',     'uses'=>'CategoriasController@store']);
});

Route::group(['prefix'=>'ItensPedido', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',            ['as'=>'itensPedido',           'uses'=>'ItensPedidoController@index']);
    Route::get('create',      ['as'=>'itensPedido.create',    'uses'=>'ItensPedidoController@create']);
    Route::get('{id}/destroy',['as'=>'itensPedido.destroy',   'uses'=>'ItensPedidoController@destroy']);
    Route::get('{id}/edit',   ['as'=>'itensPedido.edit',      'uses'=>'ItensPedidoController@edit']);
    Route::put('{id}/update', ['as'=>'itensPedido.update',    'uses'=>'ItensPedidoController@update']);
    Route::post('store',      ['as'=>'itensPedido.store',     'uses'=>'ItensPedidoController@store']);
});

Route::group(['prefix'=>'Pedidos', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',            ['as'=>'pedidos',           'uses'=>'PedidosController@index']);
    Route::get('create',      ['as'=>'pedidos.create',    'uses'=>'PedidosController@create']);
    Route::get('{id}/destroy',['as'=>'pedidos.destroy',   'uses'=>'PedidosController@destroy']);
    Route::get('{id}/edit',   ['as'=>'pedidos.edit',      'uses'=>'PedidosController@edit']);
    Route::put('{id}/update', ['as'=>'pedidos.update',    'uses'=>'PedidosController@update']);
    Route::post('store',      ['as'=>'pedidos.store',     'uses'=>'PedidosController@store']);
});

Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',            ['as'=>'clientes',           'uses'=>'ClientesController@index']);
    Route::get('create',      ['as'=>'clientes.create',    'uses'=>'ClientesController@create']);
    Route::get('{id}/destroy',['as'=>'clientes.destroy',   'uses'=>'ClientesController@destroy']);
    Route::get('{id}/edit',   ['as'=>'clientes.edit',      'uses'=>'ClientesController@edit']);
    Route::put('{id}/update', ['as'=>'clientes.update',    'uses'=>'ClientesController@update']);
    Route::post('store',      ['as'=>'clientes.store',     'uses'=>'ClientesController@store']);
});

Route::group(['prefix'=>'mesas', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',            ['as'=>'mesas',           'uses'=>'MesasController@index']);
    Route::get('create',      ['as'=>'mesas.create',    'uses'=>'MesasController@create']);
    Route::get('{id}/destroy',['as'=>'mesas.destroy',   'uses'=>'MesasController@destroy']);
    Route::get('{id}/edit',   ['as'=>'mesas.edit',      'uses'=>'MesasController@edit']);
    Route::put('{id}/update', ['as'=>'mesas.update',    'uses'=>'MesasController@update']);
    Route::post('store',      ['as'=>'mesas.store',     'uses'=>'MesasController@store']);
});