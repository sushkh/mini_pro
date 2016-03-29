<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Recipient extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
   'recipient','created_at'
    ];
    protected $table="recipient";

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   
}
