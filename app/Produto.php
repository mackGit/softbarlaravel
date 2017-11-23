<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'description',
        'price',
        'categoria_id'];



    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }

    public function pedido() {
        return $this->belongsToMany('App\pedido');
    }
}
