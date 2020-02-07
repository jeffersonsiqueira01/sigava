<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'addresses';
    protected $fillable = [
        'city_id', 'name', 'street', 'number', 'postal_code', 'complement', 'district', 'lat', 'long', 'status',
    ];
}
