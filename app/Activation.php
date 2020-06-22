<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Activation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'role_id','status'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
