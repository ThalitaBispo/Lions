<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    //boa sorte vai ter que colocar nessa lista ai todos os atributos da tabela

    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'cpf_cnpj', 'sector', 'type', 'tel', 'cep', 'street', 'complement', 'district', 'city', 'state',
        'number', 'court', 'lot', 'date', 'day', 'newdate', 'value', 'seller', 'users_id',
    ];
}
