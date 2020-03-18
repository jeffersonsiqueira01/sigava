<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acabamento extends Model
{
    protected $fillable = [
        'classificacao',
        'cub',
        'estado',
        'status'
    ];

    public function property()
    {
        return $this->hasOne('App\Property', 'id', 'acabamento_id');
    }
}
