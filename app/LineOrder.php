<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineOrder extends Model
{
    protected $table = 'lines_orders';
    protected $fillable = [ 'id_header_orders', 'id_products', 'ref', 'name', 'quantity', 'price','total_lines',
    'totaliva','baseimponible','poriva'];
}
