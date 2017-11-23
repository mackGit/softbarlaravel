<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'description'];


    public function produtos()
    {
        return $this->hasMany('App/Produto');
    }
}
