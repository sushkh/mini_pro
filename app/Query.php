<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Query extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
   'query'
    ];
    protected $table="query";

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   
}
