<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    //
    protected $fillable = [
        'date', 'value', 'empresas_id', 'pessoa_f_s'
    ];
}
