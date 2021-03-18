<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    //boa sorte vai ter que colocar nessa lista ai todos os atributos da tabela

    use SoftDeletes;

    protected $fillable = [
        'name', 'cpf_cnpj', 'sector', 'type', 'tel', 'cep', 'street', 'district', 'city', 'state',
        'number', 'court', 'lot', 'date', 'value', 'seller', 'users_id',
    ];
}
