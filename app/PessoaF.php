<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaF extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name', 'cpf', 'clientes_id'
    ];
}
