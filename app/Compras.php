<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Compras extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'compras'; 
    protected $primarykey = 'id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser','idPublicacion', 'cantidad','precio','titulo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
