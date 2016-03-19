<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Template extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
   'name','data'
    ];
    protected $table="template";

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   
}
