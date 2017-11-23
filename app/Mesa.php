<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
        'description'];

    public function pedido() {
        return $this->belongsToMany('App\Pedido');
    }
}
