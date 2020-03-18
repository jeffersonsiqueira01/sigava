<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'addresses';
    protected $fillable = [
        'cidade', 'uf', 'rua', 'name', 'numero', 'complemento', 'bairro', 'cep', 'ibge', 'status',
    ];

    public function property()
    {
        return $this->belongsTo('App\Property', 'address_id', 'id');
    }
}
