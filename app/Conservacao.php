<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conservacao extends Model
{
    protected $table = 'conservacoes';

    protected $fillable = [
        'descricao',
        'classificacao',
        'estado',
        'coef',
        'status',
    ];

    public function property()
    {
        return $this->hasOne('App\Property', 'id', 'conservacao_id');
    }
}

