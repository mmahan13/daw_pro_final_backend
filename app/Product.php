<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id_user', 'ref', 'name', 'tipo_iva', 'price', 'active'
    ];
}
