<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['id', 'nome', 'uf'];

    public function cidades(){
        return $this->hasMany(Cidade::class);
    }

    public function pais(){
        return $this->belongsTo(Pais::class);
    }
}
