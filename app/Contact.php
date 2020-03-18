<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id', 'empresa_id', 'name', 'tel', 'email', 'status',
    ];

    public function property()
    {
        return $this->belongsTo('App\Property', 'contact_id', 'id');
    }
}
