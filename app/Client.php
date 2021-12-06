<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'id_user', 'id_rol', 'name', 'cif', 'email', 'telephone', 'address', 'active'
    ];
}
