<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';

    protected $fillable = ['id', 'nome', 'sigla'];

    public function estados()
    {
        return $this->hasMany(Estado::class);
    }
}
