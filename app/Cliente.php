<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'rua',
        'numero',
        'bairro',
        'cidade',
    ];

    public function pedido() {
        return $this->hasMany('App\Pedido');
    }
}
