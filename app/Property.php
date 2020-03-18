<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'userlanc_id',
        'address_id',
        'usercoleta',
        'vltotal',
        'objetivo',
        'contact_id',
        'dtcoleta',
        'codigodata',
        'areaconstruida',
        'areaterreno',
        'indiceFiscal',
        'macrolocalizacao',
        'distanciapolo',
        'numquarto',
        'numsuite',
        'numgaragem',
        'numbamheiro',
        'acabamento_id',
        'conservacao_id',
        'idadeaparente',
        'custoreedicao',
        'condominio',
        'equipamentos',
        'vlmetro',
        'situacao',
        'publicado',
        'dtpublic',
        'userpublic_id',
        'obs',

    ];

    public function contact()
    {
        return $this->hasOne('App\Contact', 'id', 'contact_id');
    }

    public function address()
    {
        return $this->hasOne('App\Endereco', 'id', 'address_id');
    }
    public function acabamento()
    {
        return $this->belongsTo('App\Acabamento', 'acabamento_id', 'id');
    }
    public function conservacao()
    {
        return $this->belongsTo('App\Conservacao', 'conservacao_id', 'id');
    }
}
