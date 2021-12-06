<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function getAll(){
        $clients = Client::orderBy('id','DESC')->get();
        return $clients;
    }
}
