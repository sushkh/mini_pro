<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Mail extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
   'recipient','data'
    ];
    protected $table="mail";

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   
}
