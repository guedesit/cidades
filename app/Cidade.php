<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['id', 'nome'];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
