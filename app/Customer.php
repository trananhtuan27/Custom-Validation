<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = "customer";
    protected $fillable = [
        'id','name','age','address'
    ];

}
