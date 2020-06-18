<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //add this line

class Router extends Model
{
    use SoftDeletes; //soft delete
    protected $fillable = [
        'sap_id',
        'hostname',
        'loopback',
        'mac_address',
        'type'       
    ];
}
