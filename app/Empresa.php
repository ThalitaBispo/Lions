<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use SoftDeletes;
    
    protected $fillable =[
        'name', 'cnpj', 'sector', 'clientes_id'
    ];
}
