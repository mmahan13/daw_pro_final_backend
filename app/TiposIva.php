<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposIva extends Model
{
    protected $table = 'tipos_iva';
    protected $fillable = ['value','por_iva', 'tipo_iva'];
}
