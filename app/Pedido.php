<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'cliente_id'];

    public function cliente() {
        return $this->belongsTo('App\Cliente');
    }

    public function mesa() {
        return $this->belongsToMany('App\Mesa');
    }

    public function produto(){
        return $this->belongsToMany('App\Produto');
    }
}
