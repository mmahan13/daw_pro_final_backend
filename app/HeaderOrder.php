<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderOrder extends Model
{
    protected $table = 'header_orders';
    protected $fillable = [
        'id_user', 'id_clients', 'name', 'email', 'telephone', 'address', 'number_orders', 'date', 'status', 'ejercicio', 'total'
    ];

    public function lines()
    {
        return $this->belongsToMany('App\LineOrder');
    }
}
