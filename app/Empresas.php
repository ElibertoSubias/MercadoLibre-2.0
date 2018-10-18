<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Jenssegers\Mongodb\Auth\User as Authenticatable;


class Empresas extends Authenticatable 
{
    protected $connection = 'mongodb';
    protected $collection = 'empresas'; 
    protected $primarykey = 'id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rfc', 'razonSocial', 'email', 'alias', 'password','telefono','telefono2',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
