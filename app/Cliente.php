<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    //boa sorte vai ter que colocar nessa lista ai todos os atributos da tabela

    use SoftDeletes;

    protected $fillable = [
        'type', 'tel', 'cep', 'street', 'district', 'city', 'state',
        'number', 'court', 'lot', 'seller', 'users_id'
    ];
}
